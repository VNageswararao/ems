select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040252208709717

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040252208709717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031387805938721

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040252208709717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031387805938721

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0060679912567139

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040252208709717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031387805938721

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0060679912567139

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028879642486572

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040252208709717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031387805938721

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0060679912567139

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028879642486572

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047240257263184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040252208709717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031387805938721

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0060679912567139

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028879642486572

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047240257263184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042650699615479

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040252208709717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031387805938721

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0060679912567139

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028879642486572

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047240257263184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042650699615479

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040252208709717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031387805938721

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0060679912567139

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028879642486572

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047240257263184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042650699615479

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037989616394043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040252208709717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031387805938721

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0060679912567139

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028879642486572

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047240257263184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042650699615479

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037989616394043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011820793151855

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040252208709717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031387805938721

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0060679912567139

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028879642486572

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047240257263184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042650699615479

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037989616394043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011820793151855

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026760101318359

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00075507164001465

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00075507164001465

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00028085708618164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001046895980835

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001046895980835

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00091910362243652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053691864013672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053691864013672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053691864013672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0025820732116699

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0025820732116699

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0029048919677734

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0054199695587158

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0025820732116699

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0029048919677734

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0054199695587158

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0031681060791016

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0025820732116699

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0029048919677734

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0054199695587158

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0031681060791016

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 436 
 Execution Time:0.0048930644989014

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 478 
 Execution Time:0.00041103363037109

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 478  and `patient_registration_id` = 436 
 Execution Time:0.0078661441802979

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034430027008057

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0027809143066406

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0027809143066406

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0009009838104248

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012271404266357

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012271404266357

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00054192543029785

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051212310791016

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051212310791016

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0032398700714111

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0032398700714111

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090503692626953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0032398700714111

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090503692626953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057482719421387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0032398700714111

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090503692626953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057482719421387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0032398700714111

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090503692626953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057482719421387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0032398700714111

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090503692626953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057482719421387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072908401489258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0032398700714111

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090503692626953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057482719421387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072908401489258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001251220703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0032398700714111

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090503692626953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057482719421387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072908401489258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001251220703125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00098514556884766

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055694580078125

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055694580078125

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028514862060547

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037002563476562

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037002563476562

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030303001403809

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 437 
 Execution Time:0.0042119026184082

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 479 
 Execution Time:0.0043299198150635

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 479  and `patient_registration_id` = 437 
 Execution Time:0.00039982795715332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063586235046387

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063586235046387

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00024795532226562

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00060915946960449

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00060915946960449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032877922058105

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00060915946960449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032877922058105

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00060915946960449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032877922058105

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 436 
 Execution Time:0.00052905082702637

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 478 
 Execution Time:0.0003352165222168

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 478  and `patient_registration_id` = 436 
 Execution Time:0.00032687187194824

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 436 
 Execution Time:0.0011999607086182

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select * from examination where examination_id= '421' and   office_id= '1' 
 Execution Time:0.00095295906066895

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 421 
 Execution Time:0.0024240016937256

select * from examination_chargesdetails where  examination_id= '421' 
 Execution Time:0.0021049976348877

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0030779838562012

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0030779838562012

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052905082702637

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052905082702637

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027203559875488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005040168762207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005040168762207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0025620460510254

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00039100646972656

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00039100646972656

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00023818016052246

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041413307189941

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041413307189941

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059294700622559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059294700622559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059294700622559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059294700622559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056195259094238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059294700622559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056195259094238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059294700622559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056195259094238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011940002441406

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00061202049255371

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00061202049255371

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029802322387695

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 438 
 Execution Time:0.00025391578674316

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 480 
 Execution Time:0.00018692016601562

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 480  and `patient_registration_id` = 438 
 Execution Time:0.00019311904907227

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050616264343262

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050616264343262

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0002591609954834

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036501884460449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036501884460449

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024604797363281

select count(*) as cnt from patient_registration where  patient_registration_id= '381' and  office_id= '1' 
 Execution Time:0.00034499168395996

select count(*) as cnt from patient_registration where  patient_registration_id= '381' and  office_id= '1' 
 Execution Time:0.00034499168395996

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=381  
 Execution Time:0.0026028156280518

select count(*) as cnt from patient_registration where  patient_registration_id= '381' and  office_id= '1' 
 Execution Time:0.00034499168395996

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=381  
 Execution Time:0.0026028156280518

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=381  
 Execution Time:0.00064206123352051

select count(*) as cnt from patient_registration where  patient_registration_id= '381' and  office_id= '1' 
 Execution Time:0.00034499168395996

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=381  
 Execution Time:0.0026028156280518

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=381  
 Execution Time:0.00064206123352051

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='381' and  office_id= '1' 
 Execution Time:0.00023603439331055

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056600570678711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056600570678711

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065302848815918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065302848815918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065302848815918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065302848815918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064301490783691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065302848815918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064301490783691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065302848815918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064301490783691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00094199180603027

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00094199180603027

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030088424682617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044798851013184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044798851013184

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031685829162598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031685829162598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031685829162598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031685829162598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007169246673584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031685829162598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007169246673584

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012228488922119

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031685829162598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007169246673584

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012228488922119

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002208948135376

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002208948135376

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002208948135376

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 439 
 Execution Time:0.00036311149597168

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 481 
 Execution Time:0.00025677680969238

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 481  and `patient_registration_id` = 439 
 Execution Time:0.00041413307189941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065994262695312

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065994262695312

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00029611587524414

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012519359588623

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012519359588623

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035500526428223

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049614906311035

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049614906311035

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055503845214844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030088424682617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030088424682617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015490055084229

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030088424682617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015490055084229

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030088424682617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015490055084229

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053095817565918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030088424682617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015490055084229

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053095817565918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013291835784912

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030088424682617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015490055084229

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053095817565918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013291835784912

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00050806999206543

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00050806999206543

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036406517028809

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057196617126465

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057196617126465

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021400451660156

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021400451660156

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021400451660156

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011091232299805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021400451660156

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011091232299805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003715991973877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021400451660156

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011091232299805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003715991973877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001291036605835

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021400451660156

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011091232299805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003715991973877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001291036605835

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021400451660156

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011091232299805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003715991973877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001291036605835

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021400451660156

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011091232299805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003715991973877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001291036605835

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00097298622131348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021400451660156

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011091232299805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003715991973877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001291036605835

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00097298622131348

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021400451660156

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011091232299805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003715991973877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001291036605835

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00097298622131348

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0020718574523926

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029706954956055

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029706954956055

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00023889541625977

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00074386596679688

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00074386596679688

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00074386596679688

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00074386596679688

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 438 
 Execution Time:0.00023579597473145

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 480 
 Execution Time:0.00021004676818848

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 480  and `patient_registration_id` = 438 
 Execution Time:0.00050020217895508

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 438 
 Execution Time:0.00089788436889648

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013070106506348

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064802169799805

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064802169799805

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00025701522827148

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0009160041809082

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0009160041809082

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from examination where examination_id= '423' and   office_id= '1' 
 Execution Time:0.00070285797119141

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 423 
 Execution Time:0.00050806999206543

select * from examination_chargesdetails where  examination_id= '423' 
 Execution Time:0.00039386749267578

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054192543029785

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054192543029785

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036883354187012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034093856811523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034093856811523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034093856811523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063514709472656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034093856811523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063514709472656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034093856811523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063514709472656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029802322387695

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029802322387695

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00024294853210449

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030684471130371

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030684471130371

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00025701522827148

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010027885437012

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010027885437012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010027885437012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010027885437012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 381 
 Execution Time:0.00036215782165527

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 482 
 Execution Time:0.00023603439331055

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 482  and `patient_registration_id` = 381 
 Execution Time:0.00050115585327148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047492980957031

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047492980957031

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00023508071899414

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050711631774902

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050711631774902

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028586387634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.000823974609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.000823974609375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013778209686279

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.000823974609375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013778209686279

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='50' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0011100769042969

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='80' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00055408477783203

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='39' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00055813789367676

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='72' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00059890747070312

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00040292739868164

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00040292739868164

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026893615722656

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004279613494873

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004279613494873

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040411949157715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015783309936523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015783309936523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018906593322754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015783309936523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018906593322754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015783309936523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018906593322754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015783309936523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018906593322754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046086311340332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015783309936523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018906593322754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046086311340332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012068748474121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015783309936523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018906593322754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046086311340332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012068748474121

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049185752868652

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049185752868652

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00040292739868164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033712387084961

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033712387084961

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045990943908691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045990943908691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00074410438537598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045990943908691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00074410438537598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 437 
 Execution Time:0.00022077560424805

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 479 
 Execution Time:0.00018906593322754

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 479  and `patient_registration_id` = 437 
 Execution Time:0.00050091743469238

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 437 
 Execution Time:0.00070905685424805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select * from examination where examination_id= '422' and   office_id= '1' 
 Execution Time:0.00097107887268066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 422 
 Execution Time:0.00049114227294922

select * from examination_chargesdetails where  examination_id= '422' 
 Execution Time:0.00028395652770996

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069785118103027

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069785118103027

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031709671020508

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0008080005645752

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0008080005645752

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047683715820312

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 441 
 Execution Time:0.00031495094299316

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 484 
 Execution Time:0.00024294853210449

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 484  and `patient_registration_id` = 441 
 Execution Time:0.00024318695068359

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056195259094238

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056195259094238

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030303001403809

select count(*) as cnt from patient_registration where  patient_registration_id= '435' and  office_id= '1' 
 Execution Time:0.00048398971557617

select count(*) as cnt from patient_registration where  patient_registration_id= '435' and  office_id= '1' 
 Execution Time:0.00048398971557617

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=435  
 Execution Time:0.0013809204101562

select count(*) as cnt from patient_registration where  patient_registration_id= '435' and  office_id= '1' 
 Execution Time:0.00048398971557617

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=435  
 Execution Time:0.0013809204101562

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=435  
 Execution Time:0.0004730224609375

select count(*) as cnt from patient_registration where  patient_registration_id= '435' and  office_id= '1' 
 Execution Time:0.00048398971557617

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=435  
 Execution Time:0.0013809204101562

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=435  
 Execution Time:0.0004730224609375

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='435' and  office_id= '1' 
 Execution Time:0.00023889541625977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051403045654297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051403045654297

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026106834411621

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 381 
 Execution Time:0.00023913383483887

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 482 
 Execution Time:0.00016403198242188

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 482  and `patient_registration_id` = 381 
 Execution Time:0.00033807754516602

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 381 
 Execution Time:0.00094413757324219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select * from examination where examination_id= '425' and   office_id= '1' 
 Execution Time:0.00085997581481934

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 425 
 Execution Time:0.00037097930908203

select * from examination_chargesdetails where  examination_id= '425' 
 Execution Time:0.00031399726867676

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004580020904541

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004580020904541

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00024700164794922

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00027799606323242

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00089216232299805

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00089216232299805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00089216232299805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00089216232299805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 439 
 Execution Time:0.00025606155395508

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 481 
 Execution Time:0.00016403198242188

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 481  and `patient_registration_id` = 439 
 Execution Time:0.00046992301940918

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 439 
 Execution Time:0.0010490417480469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select * from examination where examination_id= '424' and   office_id= '1' 
 Execution Time:0.00065779685974121

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 424 
 Execution Time:0.00027799606323242

select * from examination_chargesdetails where  examination_id= '424' 
 Execution Time:0.00037217140197754

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00089097023010254

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00089097023010254

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037002563476562

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00087285041809082

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00087285041809082

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051212310791016

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00065493583679199

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00065493583679199

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034999847412109

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061202049255371

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061202049255371

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031304359436035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031304359436035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031304359436035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072097778320312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031304359436035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072097778320312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013790130615234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031304359436035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072097778320312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013790130615234

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00092506408691406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00092506408691406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00092506408691406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 443 
 Execution Time:0.000579833984375

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 486 
 Execution Time:0.0004270076751709

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 486  and `patient_registration_id` = 443 
 Execution Time:0.00077104568481445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000640869140625

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00074195861816406

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00074195861816406

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00024700164794922

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00042295455932617

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00042295455932617

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00026607513427734

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 381 
 Execution Time:0.00025296211242676

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 482 
 Execution Time:0.0001838207244873

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 482  and `patient_registration_id` = 381 
 Execution Time:0.00022387504577637

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 381 
 Execution Time:0.00082492828369141

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001368522644043

select * from examination where examination_id= '425' and   office_id= '1' 
 Execution Time:0.00059199333190918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 425 
 Execution Time:0.00034284591674805

select * from examination_chargesdetails where  examination_id= '425' 
 Execution Time:0.00026917457580566

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037407875061035

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037407875061035

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033903121948242

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033187866210938

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033187866210938

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030517578125

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00073885917663574

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00073885917663574

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034189224243164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028078556060791

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028078556060791

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022351741790771

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028078556060791

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022351741790771

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014059543609619

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028078556060791

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022351741790771

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014059543609619

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020930767059326

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028078556060791

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022351741790771

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014059543609619

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020930767059326

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00152587890625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028078556060791

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022351741790771

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014059543609619

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020930767059326

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00152587890625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028078556060791

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022351741790771

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014059543609619

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020930767059326

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00152587890625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028078556060791

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022351741790771

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014059543609619

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020930767059326

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00152587890625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018479824066162

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028078556060791

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022351741790771

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014059543609619

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020930767059326

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00152587890625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018479824066162

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020711421966553

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028078556060791

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022351741790771

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014059543609619

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020930767059326

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00152587890625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018479824066162

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020711421966553

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001521110534668

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033378601074219

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033378601074219

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033378601074219

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 443 
 Execution Time:0.00027990341186523

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 486 
 Execution Time:0.00023293495178223

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 486  and `patient_registration_id` = 443 
 Execution Time:0.00036883354187012

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 443 
 Execution Time:0.00084090232849121

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00088906288146973

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00088906288146973

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from examination where examination_id= '427' and   office_id= '1' 
 Execution Time:0.00062799453735352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057578086853027

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 427 
 Execution Time:0.00030398368835449

select * from examination_chargesdetails where  examination_id= '427' 
 Execution Time:0.00056791305541992

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0007321834564209

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0007321834564209

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026082992553711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026082992553711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026082992553711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014686584472656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026082992553711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014686584472656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047707557678223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026082992553711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014686584472656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047707557678223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0007321834564209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026082992553711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014686584472656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047707557678223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0007321834564209

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0006098747253418

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0006098747253418

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003349781036377

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050497055053711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050497055053711

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070881843566895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070881843566895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070881843566895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070881843566895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070881843566895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058293342590332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070881843566895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058293342590332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070881843566895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058293342590332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070881843566895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058293342590332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00094079971313477

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070881843566895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058293342590332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00094079971313477

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012760162353516

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070881843566895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058293342590332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00094079971313477

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012760162353516

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00048279762268066

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00048279762268066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00048279762268066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00048279762268066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 441 
 Execution Time:0.00027012825012207

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 484 
 Execution Time:0.00023508071899414

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 484  and `patient_registration_id` = 441 
 Execution Time:0.00033187866210938

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 441 
 Execution Time:0.0013260841369629

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select * from examination where examination_id= '426' and   office_id= '1' 
 Execution Time:0.0011649131774902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 426 
 Execution Time:0.0012509822845459

select * from examination_chargesdetails where  examination_id= '426' 
 Execution Time:0.0012428760528564

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00067901611328125

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00067901611328125

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050687789916992

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00071310997009277

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00071310997009277

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004119873046875

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00071215629577637

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00062704086303711

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00062704086303711

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00020003318786621

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012061595916748

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012061595916748

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036811828613281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095987319946289

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095987319946289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095987319946289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057578086853027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095987319946289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057578086853027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095987319946289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057578086853027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066685676574707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095987319946289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057578086853027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066685676574707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095987319946289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057578086853027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066685676574707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095987319946289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057578086853027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066685676574707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077390670776367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095987319946289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057578086853027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066685676574707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077390670776367

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015189647674561

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095987319946289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057578086853027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066685676574707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077390670776367

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015189647674561

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00095891952514648

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00095891952514648

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00015997886657715

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0031781196594238

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0031781196594238

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030517578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000885009765625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000885009765625

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000885009765625

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000885009765625

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059604644775391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000885009765625

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059604644775391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000885009765625

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059604644775391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000885009765625

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059604644775391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014040470123291

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000885009765625

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059604644775391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014040470123291

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021460056304932

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000885009765625

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059604644775391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014040470123291

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021460056304932

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018951892852783

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018951892852783

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017538070678711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018951892852783

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017538070678711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014891624450684

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018951892852783

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017538070678711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014891624450684

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018730163574219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018951892852783

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017538070678711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014891624450684

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018730163574219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013790130615234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018951892852783

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017538070678711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014891624450684

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018730163574219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013790130615234

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014748573303223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018951892852783

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017538070678711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014891624450684

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018730163574219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013790130615234

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014748573303223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018951892852783

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017538070678711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014891624450684

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018730163574219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013790130615234

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014748573303223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0051259994506836

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018951892852783

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017538070678711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014891624450684

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018730163574219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013790130615234

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014748573303223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0051259994506836

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001716136932373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018951892852783

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017538070678711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014891624450684

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018730163574219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013790130615234

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014748573303223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0051259994506836

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001716136932373

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0022211074829102

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0016441345214844

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0016441345214844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0043528079986572

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0013651847839355

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0016441345214844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0043528079986572

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0013651847839355

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0014579296112061

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0016441345214844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0043528079986572

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0013651847839355

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0014579296112061

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 436 
 Execution Time:0.00029683113098145

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 478 
 Execution Time:0.00019097328186035

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 478  and `patient_registration_id` = 436 
 Execution Time:0.0019519329071045

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 436 
 Execution Time:0.00075888633728027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select * from examination where examination_id= '421' and   office_id= '1' 
 Execution Time:0.0047118663787842

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 421 
 Execution Time:0.0021388530731201

select * from examination_chargesdetails where  examination_id= '421' 
 Execution Time:0.023384809494019

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0016748905181885

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0016748905181885

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004880428314209

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0023648738861084

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0023648738861084

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00066018104553223

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00017213821411133

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00017213821411133

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00017213821411133

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 436 
 Execution Time:0.00028300285339355

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 478 
 Execution Time:0.00018906593322754

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 478  and `patient_registration_id` = 436 
 Execution Time:0.0001680850982666

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 436 
 Execution Time:0.00069189071655273

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select * from examination where examination_id= '421' and   office_id= '1' 
 Execution Time:0.00099897384643555

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 421 
 Execution Time:0.00039505958557129

select * from examination_chargesdetails where  examination_id= '421' 
 Execution Time:0.00025296211242676

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057101249694824

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057101249694824

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039291381835938

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040817260742188

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040817260742188

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027990341186523

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 436 
 Execution Time:0.00033998489379883

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 478 
 Execution Time:0.00040984153747559

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 478  and `patient_registration_id` = 436 
 Execution Time:0.0008540153503418

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 436 
 Execution Time:0.0025339126586914

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select * from examination where examination_id= '421' and   office_id= '1' 
 Execution Time:0.00087404251098633

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 421 
 Execution Time:0.00031018257141113

select * from examination_chargesdetails where  examination_id= '421' 
 Execution Time:0.00029110908508301

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00076603889465332

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00076603889465332

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00025701522827148

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044798851013184

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044798851013184

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035500526428223

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 436 
 Execution Time:0.00068783760070801

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 478 
 Execution Time:0.00065803527832031

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 478  and `patient_registration_id` = 436 
 Execution Time:0.00043702125549316

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 436 
 Execution Time:0.0016491413116455

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00097393989562988

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00097393989562988

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048303604125977

select * from examination where examination_id= '421' and   office_id= '1' 
 Execution Time:0.00074982643127441

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 421 
 Execution Time:0.00038790702819824

select * from examination_chargesdetails where  examination_id= '421' 
 Execution Time:0.0003349781036377

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042414665222168

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042414665222168

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036501884460449

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 436 
 Execution Time:0.00028610229492188

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 478 
 Execution Time:0.00020003318786621

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 478  and `patient_registration_id` = 436 
 Execution Time:0.0001380443572998

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 436 
 Execution Time:0.00063800811767578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00059890747070312

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00059890747070312

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003209114074707

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048494338989258

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048494338989258

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00027179718017578

select * from examination where examination_id= '421' and   office_id= '1' 
 Execution Time:0.00047707557678223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010190010070801

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 421 
 Execution Time:0.00019598007202148

select * from examination_chargesdetails where  examination_id= '421' 
 Execution Time:0.00017690658569336

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 436 
 Execution Time:0.00028586387634277

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 478 
 Execution Time:0.00016903877258301

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 478  and `patient_registration_id` = 436 
 Execution Time:0.0001528263092041

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 436 
 Execution Time:0.00072097778320312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select * from examination where examination_id= '421' and   office_id= '1' 
 Execution Time:0.0011389255523682

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0038139820098877

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 421 
 Execution Time:0.00058603286743164

select * from examination_chargesdetails where  examination_id= '421' 
 Execution Time:0.00027894973754883

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011651515960693

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011651515960693

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00076484680175781

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003509521484375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003509521484375

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027012825012207

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 436 
 Execution Time:0.00024795532226562

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 478 
 Execution Time:0.00029206275939941

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 478  and `patient_registration_id` = 436 
 Execution Time:0.00043201446533203

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 436 
 Execution Time:0.0009310245513916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005948543548584

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005948543548584

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032901763916016

select * from examination where examination_id= '421' and   office_id= '1' 
 Execution Time:0.00065898895263672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 421 
 Execution Time:0.00058698654174805

select * from examination_chargesdetails where  examination_id= '421' 
 Execution Time:0.00047802925109863

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00029802322387695

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066018104553223

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066018104553223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066018104553223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066018104553223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 436 
 Execution Time:0.00028181076049805

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 478 
 Execution Time:0.00020599365234375

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 478  and `patient_registration_id` = 436 
 Execution Time:0.00015592575073242

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 436 
 Execution Time:0.00079107284545898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014519691467285

select * from examination where examination_id= '421' and   office_id= '1' 
 Execution Time:0.00063800811767578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 421 
 Execution Time:0.00014805793762207

select * from examination_chargesdetails where  examination_id= '421' 
 Execution Time:0.00012683868408203

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00073909759521484

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00073909759521484

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031399726867676

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058102607727051

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058102607727051

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069189071655273

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 436 
 Execution Time:0.00028800964355469

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 478 
 Execution Time:0.00023508071899414

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 478  and `patient_registration_id` = 436 
 Execution Time:0.00024986267089844

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 436 
 Execution Time:0.00076913833618164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select * from examination where examination_id= '421' and   office_id= '1' 
 Execution Time:0.0061628818511963

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.004180908203125

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 421 
 Execution Time:0.0013761520385742

select * from examination_chargesdetails where  examination_id= '421' 
 Execution Time:0.00082707405090332

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00065994262695312

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00065994262695312

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004119873046875

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004889965057373

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004889965057373

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034403800964355

SELECT *
FROM `examination`
WHERE `examination_id` = 421 
 Execution Time:0.00087690353393555

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00061297416687012

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.0004429817199707

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 436 
 Execution Time:0.00034809112548828

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.0003049373626709

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=421 
 Execution Time:0.0012428760528564

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=421 
 Execution Time:0.00084686279296875

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=421 
 Execution Time:0.00053596496582031

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=421 
 Execution Time:0.00022101402282715

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='421' and office_id='1' 
 Execution Time:0.0010528564453125

select * from examination_chargesdetails where  examination_id= '421' 
 Execution Time:0.00022506713867188

SELECT *
FROM `examination`
WHERE `examination_id` = 421 
 Execution Time:0.00070095062255859

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00029993057250977

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00026512145996094

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 436 
 Execution Time:0.00020194053649902

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00014185905456543

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=421 
 Execution Time:0.00069618225097656

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=421 
 Execution Time:0.0019078254699707

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=421 
 Execution Time:0.00031900405883789

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=421 
 Execution Time:0.00018906593322754

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='421' and office_id='1' 
 Execution Time:0.0007779598236084

select * from examination_chargesdetails where  examination_id= '421' 
 Execution Time:0.00020289421081543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 436 
 Execution Time:0.0003058910369873

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 478 
 Execution Time:0.00020909309387207

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 478  and `patient_registration_id` = 436 
 Execution Time:0.00027585029602051

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 436 
 Execution Time:0.0011310577392578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select * from examination where examination_id= '421' and   office_id= '1' 
 Execution Time:0.00073003768920898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 421 
 Execution Time:0.00020790100097656

select * from examination_chargesdetails where  examination_id= '421' 
 Execution Time:0.00020289421081543

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016171932220459

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016171932220459

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037193298339844

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053095817565918

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053095817565918

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028300285339355

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 436 
 Execution Time:0.00020694732666016

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 478 
 Execution Time:0.00026512145996094

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 478  and `patient_registration_id` = 436 
 Execution Time:0.00018095970153809

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 436 
 Execution Time:0.00071191787719727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select * from examination where examination_id= '421' and   office_id= '1' 
 Execution Time:0.00066208839416504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 421 
 Execution Time:0.00034999847412109

select * from examination_chargesdetails where  examination_id= '421' 
 Execution Time:0.0002739429473877

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051712989807129

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051712989807129

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037717819213867

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006248950958252

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006248950958252

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00022602081298828

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00075387954711914

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00075387954711914

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 452 
 Execution Time:0.00025486946105957

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 496 
 Execution Time:0.00069403648376465

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 496  and `patient_registration_id` = 452 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00071907043457031

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00071907043457031

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00026202201843262

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 452 
 Execution Time:0.00033402442932129

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 496 
 Execution Time:0.00032711029052734

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 496  and `patient_registration_id` = 452 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060606002807617

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060606002807617

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038003921508789

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 436 
 Execution Time:0.00054597854614258

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 478 
 Execution Time:0.00041103363037109

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 478  and `patient_registration_id` = 436 
 Execution Time:0.00030207633972168

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 436 
 Execution Time:0.0011770725250244

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select * from examination where examination_id= '421' and   office_id= '1' 
 Execution Time:0.00091195106506348

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 421 
 Execution Time:0.0002598762512207

select * from examination_chargesdetails where  examination_id= '421' 
 Execution Time:0.00023508071899414

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00073504447937012

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00073504447937012

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047993659973145

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053095817565918

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053095817565918

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033712387084961

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 436 
 Execution Time:0.00035595893859863

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 478 
 Execution Time:0.00028395652770996

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 478  and `patient_registration_id` = 436 
 Execution Time:0.0003509521484375

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 436 
 Execution Time:0.00081396102905273

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004570484161377

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004570484161377

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012128353118896

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00071191787719727

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00071191787719727

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00025200843811035

select * from examination where examination_id= '421' and   office_id= '1' 
 Execution Time:0.00084900856018066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 421 
 Execution Time:0.00021505355834961

select * from examination_chargesdetails where  examination_id= '421' 
 Execution Time:0.00020194053649902

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0021219253540039

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0021219253540039

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 436 
 Execution Time:0.00034594535827637

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 478 
 Execution Time:0.00023388862609863

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 478  and `patient_registration_id` = 436 
 Execution Time:0.00015687942504883

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 436 
 Execution Time:0.00095605850219727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select * from examination where examination_id= '421' and   office_id= '1' 
 Execution Time:0.00089907646179199

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 421 
 Execution Time:0.00017595291137695

select * from examination_chargesdetails where  examination_id= '421' 
 Execution Time:0.0001988410949707

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053000450134277

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053000450134277

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048279762268066

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043201446533203

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043201446533203

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027894973754883

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 436 
 Execution Time:0.00048685073852539

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 478 
 Execution Time:0.00039291381835938

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 478  and `patient_registration_id` = 436 
 Execution Time:0.00039505958557129

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 436 
 Execution Time:0.0011801719665527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select * from examination where examination_id= '421' and   office_id= '1' 
 Execution Time:0.0010409355163574

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 421 
 Execution Time:0.00023508071899414

select * from examination_chargesdetails where  examination_id= '421' 
 Execution Time:0.00019598007202148

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00083088874816895

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00083088874816895

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048494338989258

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0014040470123291

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0014040470123291

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045490264892578

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 436 
 Execution Time:0.00030112266540527

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 478 
 Execution Time:0.00023293495178223

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 478  and `patient_registration_id` = 436 
 Execution Time:0.00013899803161621

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 436 
 Execution Time:0.00098204612731934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select * from examination where examination_id= '421' and   office_id= '1' 
 Execution Time:0.00094199180603027

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057315826416016

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 421 
 Execution Time:0.00058603286743164

select * from examination_chargesdetails where  examination_id= '421' 
 Execution Time:0.00035691261291504

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00074505805969238

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00074505805969238

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004889965057373

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065708160400391

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065708160400391

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00026583671569824

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0012409687042236

SELECT *
FROM `examination`
WHERE `examination_id` = 421 
 Execution Time:0.0012710094451904

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00060391426086426

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00062394142150879

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 436 
 Execution Time:0.00054383277893066

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00044798851013184

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=421 
 Execution Time:0.001568078994751

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=421 
 Execution Time:0.0010788440704346

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=421 
 Execution Time:0.00081801414489746

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=421 
 Execution Time:0.0023739337921143

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='421' and office_id='1' 
 Execution Time:0.0013058185577393

select * from examination_chargesdetails where  examination_id= '421' 
 Execution Time:0.00049495697021484

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-13' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0015919208526611

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-13' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0012938976287842

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-13' and chargetype_id = '3' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00094103813171387

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-13' and chargetype_id = '4' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00095796585083008

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085616111755371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085616111755371

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085616111755371

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085616111755371

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.0001378059387207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085616111755371

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.0001378059387207

select doctors_registration_id,name from doctors_registration where designation=3 and   office_id= '1' and status=1 
 Execution Time:0.0001060962677002

select preoperative_appointment_id,DATE_FORMAT(preoperative_appointment.admission_date,'%d/%m/%Y') AS admission_date,department.name as opname,CONCAT(fname , ' ',  lname ,'') AS pateint_name,mrdno,gender,ageyy,mobileno,operating_surgon,typeof_anthesia,typeof_surgery_id,particular_type,eye from preoperative_appointment inner join patient_registration on patient_registration.patient_registration_id=preoperative_appointment.patient_registration_id left join department on department.department_id=preoperative_appointment.typeof_surgery_id where charge_id='2' and admission_date='2022-03-13' and preoperative_appointment.office_id='1' and preoperative_appointment.cancel_flag=0 
 Execution Time:0.0011310577392578

select preoperative_appointment_id,DATE_FORMAT(preoperative_appointment.admission_date,'%d/%m/%Y') AS admission_date,department.name as opname,CONCAT(fname , ' ',  lname ,'') AS pateint_name,mrdno,gender,ageyy,mobileno,operating_surgon,typeof_anthesia,typeof_surgery_id,particular_type,eye from preoperative_appointment inner join patient_registration on patient_registration.patient_registration_id=preoperative_appointment.patient_registration_id left join department on department.department_id=preoperative_appointment.typeof_surgery_id where charge_id='3' and admission_date='2022-03-13' and preoperative_appointment.office_id='1' and preoperative_appointment.cancel_flag=0 
 Execution Time:0.00064897537231445

select preoperative_appointment_id,DATE_FORMAT(preoperative_appointment.admission_date,'%d/%m/%Y') AS admission_date,department.name as opname,CONCAT(fname , ' ',  lname ,'') AS pateint_name,mrdno,gender,ageyy,mobileno,operating_surgon,typeof_anthesia,typeof_surgery_id,particular_type,eye from preoperative_appointment inner join patient_registration on patient_registration.patient_registration_id=preoperative_appointment.patient_registration_id left join department on department.department_id=preoperative_appointment.typeof_surgery_id where charge_id='4' and admission_date='2022-03-13' and preoperative_appointment.office_id='1' and preoperative_appointment.cancel_flag=0 
 Execution Time:0.0008699893951416

select preoperative_appointment_id,DATE_FORMAT(preoperative_appointment.admission_date,'%d/%m/%Y') AS admission_date,department.name as opname,CONCAT(fname , ' ',  lname ,'') AS pateint_name,mrdno,gender,ageyy,mobileno,operating_surgon,typeof_anthesia,typeof_surgery_id,particular_type,eye from preoperative_appointment inner join patient_registration on patient_registration.patient_registration_id=preoperative_appointment.patient_registration_id left join department on department.department_id=preoperative_appointment.typeof_surgery_id where charge_id='4' and admission_date='2022-03-13' and preoperative_appointment.office_id='1' and preoperative_appointment.cancel_flag=0 
 Execution Time:0.001039981842041

select preoperative_appointment_id,DATE_FORMAT(preoperative_appointment.admission_date,'%d/%m/%Y') AS admission_date,department.name as opname,CONCAT(fname , ' ',  lname ,'') AS pateint_name,mrdno,gender,ageyy,mobileno,operating_surgon,typeof_anthesia,typeof_surgery_id,particular_type,eye from preoperative_appointment inner join patient_registration on patient_registration.patient_registration_id=preoperative_appointment.patient_registration_id left join department on department.department_id=preoperative_appointment.typeof_surgery_id where charge_id='2' and admission_date='2022-03-13' and preoperative_appointment.office_id='1' and preoperative_appointment.cancel_flag=0 
 Execution Time:0.00078320503234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040912628173828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040912628173828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040912628173828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040912628173828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056982040405273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040912628173828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056982040405273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040912628173828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056982040405273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00058913230895996

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00058913230895996

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=2  
 Execution Time:0.0025711059570312

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00058913230895996

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=2  
 Execution Time:0.0025711059570312

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=2  
 Execution Time:0.00071811676025391

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00058913230895996

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=2  
 Execution Time:0.0025711059570312

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=2  
 Execution Time:0.00071811676025391

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00031495094299316

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00077009201049805

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00077009201049805

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00030899047851562

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0054290294647217

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0054290294647217

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0054290294647217

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0054290294647217

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00072598457336426

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 240 
 Execution Time:0.00021910667419434

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 240  and `patient_registration_id` = 2 
 Execution Time:0.00062203407287598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010528564453125

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010528564453125

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00054097175598145

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023722648620605

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023722648620605

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023722648620605

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00023412704467773

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 240 
 Execution Time:0.00016498565673828

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 240  and `patient_registration_id` = 2 
 Execution Time:0.00044798851013184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014281272888184

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055718421936035

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055718421936035

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011360645294189

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011360645294189

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012140274047852

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011360645294189

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012140274047852

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011360645294189

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012140274047852

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011360645294189

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012140274047852

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067901611328125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011360645294189

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012140274047852

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067901611328125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011360645294189

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012140274047852

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067901611328125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011360645294189

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012140274047852

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067901611328125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087809562683105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011360645294189

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012140274047852

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067901611328125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087809562683105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00087499618530273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011360645294189

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012140274047852

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067901611328125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087809562683105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00087499618530273

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00094294548034668

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00094294548034668

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00094294548034668

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00094294548034668

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 438 
 Execution Time:0.00065207481384277

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 480 
 Execution Time:0.00051116943359375

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 480  and `patient_registration_id` = 438 
 Execution Time:0.00064587593078613

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 438 
 Execution Time:0.00097489356994629

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select * from examination where examination_id= '423' and   office_id= '1' 
 Execution Time:0.0019960403442383

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 423 
 Execution Time:0.0018608570098877

select * from examination_chargesdetails where  examination_id= '423' 
 Execution Time:0.00088095664978027

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010190010070801

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010190010070801

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045680999755859

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010180473327637

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010180473327637

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00021886825561523

select * from investigation where  investigation_id=26  and office_id= 1 and status=1 
 Execution Time:0.00073599815368652

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.00053191184997559

select * from investigation where  investigation_id=25  and office_id= 1 and status=1 
 Execution Time:0.0005650520324707

select * from investigation where  investigation_id=23  and office_id= 1 and status=1 
 Execution Time:0.00049304962158203

select * from investigation where  investigation_id=26  and office_id= 1 and status=1 
 Execution Time:0.00078582763671875

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0012490749359131

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0012490749359131

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00028300285339355

select count(*) as cnt from injection where  office_id= 1 and status=1 
 Execution Time:0.00090599060058594

select count(*) as cnt from injection where  office_id= 1 and status=1 
 Execution Time:0.00090599060058594

select * from injection where  office_id= 1 and status=1 
 Execution Time:0.00033307075500488

SELECT *
FROM `examination`
WHERE `examination_id` = 423 
 Execution Time:0.00062298774719238

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00043296813964844

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00047492980957031

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 438 
 Execution Time:0.00042390823364258

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00050497055053711

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=423 
 Execution Time:0.0011398792266846

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=423 
 Execution Time:0.0007319450378418

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=423 
 Execution Time:0.00048303604125977

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=423 
 Execution Time:0.00018095970153809

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='423' and office_id='1' 
 Execution Time:0.00093698501586914

select * from examination_chargesdetails where  examination_id= '423' 
 Execution Time:0.00015687942504883


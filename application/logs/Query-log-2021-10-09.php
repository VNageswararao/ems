select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022130012512207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022130012512207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020051002502441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022130012512207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020051002502441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00189208984375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022130012512207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020051002502441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00189208984375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019900798797607

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022130012512207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020051002502441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00189208984375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019900798797607

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017938613891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022130012512207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020051002502441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00189208984375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019900798797607

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017938613891602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022130012512207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020051002502441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00189208984375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019900798797607

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017938613891602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020370483398438

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022130012512207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020051002502441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00189208984375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019900798797607

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017938613891602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020370483398438

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025339126586914

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00056290626525879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017969608306885

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048184394836426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048184394836426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048184394836426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048184394836426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075197219848633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048184394836426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075197219848633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025119781494141

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00037312507629395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00051593780517578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00067305564880371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00099802017211914

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0046689510345459

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0035350322723389

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038230419158936

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00052404403686523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097393989562988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097393989562988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097393989562988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036120414733887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097393989562988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036120414733887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097393989562988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036120414733887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097393989562988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036120414733887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097393989562988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036120414733887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068497657775879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097393989562988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036120414733887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068497657775879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018579959869385

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0011730194091797

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0011730194091797

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0031909942626953

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063204765319824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063204765319824

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034713745117188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034713745117188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034713745117188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034713745117188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052595138549805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034713745117188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052595138549805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022671222686768

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0037071704864502

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0037071704864502

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0039529800415039

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032548904418945

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032548904418945

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038549900054932

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021600723266602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021600723266602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021600723266602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021600723266602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00029611587524414

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057799816131592

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00047516822814941

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00047516822814941

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00022101402282715

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043916702270508

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043916702270508

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037384033203125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031208992004395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031208992004395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031208992004395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031208992004395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050091743469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031208992004395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050091743469238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042688846588135

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00043606758117676

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00043606758117676

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00023508071899414

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054001808166504

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054001808166504

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012500286102295

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020408630371094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020408630371094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020408630371094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020408630371094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020408630371094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00029897689819336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020549297332764

select count(*) as cnt from patient_registration where  patient_registration_id= '528' and  office_id= '1' 
 Execution Time:0.0013837814331055

select count(*) as cnt from patient_registration where  patient_registration_id= '528' and  office_id= '1' 
 Execution Time:0.0013837814331055

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='528' and  doctors_registration.office_id= '1' 
 Execution Time:0.0054011344909668

select count(*) as cnt from patient_registration where  patient_registration_id= '528' and  office_id= '1' 
 Execution Time:0.0013837814331055

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='528' and  doctors_registration.office_id= '1' 
 Execution Time:0.0054011344909668

select fname,lname,mrdno from patient_registration where  patient_registration_id='528' and  office_id= '1' 
 Execution Time:0.0020461082458496

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00045204162597656

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00045204162597656

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00026893615722656

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0036828517913818

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0036828517913818

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0017030239105225

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065493583679199

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065493583679199

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041413307189941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063395500183105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063395500183105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021200180053711

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057792663574219

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057792663574219

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042605400085449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0059480667114258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0059480667114258

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0017797946929932

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0067009925842285

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0067009925842285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038859844207764

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0067009925842285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038859844207764

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0068130493164062

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0067009925842285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038859844207764

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0068130493164062

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038511753082275

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0067009925842285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038859844207764

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0068130493164062

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038511753082275

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0057141780853271

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0067009925842285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038859844207764

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0068130493164062

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038511753082275

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0057141780853271

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0072529315948486

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0067009925842285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038859844207764

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0068130493164062

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038511753082275

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0057141780853271

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0072529315948486

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0093109607696533

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0067009925842285

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038859844207764

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0068130493164062

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038511753082275

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0057141780853271

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0072529315948486

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0093109607696533

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0074210166931152

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030398368835449

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030398368835449

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041413307189941

select count(*) as cnt from patient_registration where  patient_registration_id= '1208' and  office_id= '1' 
 Execution Time:0.00033307075500488

select count(*) as cnt from patient_registration where  patient_registration_id= '1208' and  office_id= '1' 
 Execution Time:0.00033307075500488

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1208' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033931732177734

select count(*) as cnt from patient_registration where  patient_registration_id= '1208' and  office_id= '1' 
 Execution Time:0.00033307075500488

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1208' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033931732177734

select fname,lname,mrdno from patient_registration where  patient_registration_id='1208' and  office_id= '1' 
 Execution Time:0.00027012825012207

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00050497055053711

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00050497055053711

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00027608871459961

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00071811676025391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046300888061523

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046300888061523

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063610076904297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025949478149414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025949478149414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025949478149414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049114227294922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025949478149414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049114227294922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022029876708984

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00049400329589844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0026400089263916

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0071749687194824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0041871070861816

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012259483337402

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0052640438079834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033040046691895

select count(*) as cnt from patient_registration where  patient_registration_id= '1258' and  office_id= '1' 
 Execution Time:0.00084590911865234

select count(*) as cnt from patient_registration where  patient_registration_id= '1258' and  office_id= '1' 
 Execution Time:0.00084590911865234

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1258' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025050640106201

select count(*) as cnt from patient_registration where  patient_registration_id= '1258' and  office_id= '1' 
 Execution Time:0.00084590911865234

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1258' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025050640106201

select fname,lname,mrdno from patient_registration where  patient_registration_id='1258' and  office_id= '1' 
 Execution Time:0.001025915145874

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017111301422119

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00066518783569336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0024669170379639

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0032961368560791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020101070404053

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0044341087341309

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0036041736602783

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018441677093506

select count(*) as cnt from patient_registration where  patient_registration_id= '760' and  office_id= '1' 
 Execution Time:0.0042431354522705

select count(*) as cnt from patient_registration where  patient_registration_id= '760' and  office_id= '1' 
 Execution Time:0.0042431354522705

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='760' and  doctors_registration.office_id= '1' 
 Execution Time:0.0069389343261719

select count(*) as cnt from patient_registration where  patient_registration_id= '760' and  office_id= '1' 
 Execution Time:0.0042431354522705

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='760' and  doctors_registration.office_id= '1' 
 Execution Time:0.0069389343261719

select fname,lname,mrdno from patient_registration where  patient_registration_id='760' and  office_id= '1' 
 Execution Time:0.0037980079650879

select count(*) as cnt from patient_registration where  patient_registration_id= '762' and  office_id= '1' 
 Execution Time:0.0004270076751709

select count(*) as cnt from patient_registration where  patient_registration_id= '762' and  office_id= '1' 
 Execution Time:0.0004270076751709

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='762' and  doctors_registration.office_id= '1' 
 Execution Time:0.0015630722045898

select count(*) as cnt from patient_registration where  patient_registration_id= '762' and  office_id= '1' 
 Execution Time:0.0004270076751709

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='762' and  doctors_registration.office_id= '1' 
 Execution Time:0.0015630722045898

select fname,lname,mrdno from patient_registration where  patient_registration_id='762' and  office_id= '1' 
 Execution Time:0.00028896331787109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0031819343566895

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select count(*) as cnt from patient_registration where  patient_registration_id= '756' and  office_id= '1' 
 Execution Time:0.0035159587860107

select count(*) as cnt from patient_registration where  patient_registration_id= '756' and  office_id= '1' 
 Execution Time:0.0035159587860107

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='756' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038290023803711

select count(*) as cnt from patient_registration where  patient_registration_id= '756' and  office_id= '1' 
 Execution Time:0.0035159587860107

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='756' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038290023803711

select fname,lname,mrdno from patient_registration where  patient_registration_id='756' and  office_id= '1' 
 Execution Time:0.0038630962371826

select count(*) as cnt from patient_registration where  patient_registration_id= '763' and  office_id= '1' 
 Execution Time:0.0018360614776611

select count(*) as cnt from patient_registration where  patient_registration_id= '763' and  office_id= '1' 
 Execution Time:0.0018360614776611

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='763' and  doctors_registration.office_id= '1' 
 Execution Time:0.0032579898834229

select count(*) as cnt from patient_registration where  patient_registration_id= '763' and  office_id= '1' 
 Execution Time:0.0018360614776611

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='763' and  doctors_registration.office_id= '1' 
 Execution Time:0.0032579898834229

select fname,lname,mrdno from patient_registration where  patient_registration_id='763' and  office_id= '1' 
 Execution Time:0.0032050609588623

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00074887275695801

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00074887275695801

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0025539398193359

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00083804130554199

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00083804130554199

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037908554077148

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0023190975189209

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0023190975189209

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00082707405090332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044171810150146

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044171810150146

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027081966400146

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044171810150146

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027081966400146

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039529800415039

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044171810150146

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027081966400146

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039529800415039

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038130283355713

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044171810150146

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027081966400146

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039529800415039

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038130283355713

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037720203399658

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044171810150146

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027081966400146

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039529800415039

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038130283355713

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037720203399658

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038309097290039

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044171810150146

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027081966400146

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039529800415039

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038130283355713

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037720203399658

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038309097290039

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023579597473145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044171810150146

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027081966400146

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039529800415039

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038130283355713

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037720203399658

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038309097290039

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023579597473145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039310455322266

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0011849403381348

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0011849403381348

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00072288513183594

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0021910667419434

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0021910667419434

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072789192199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025110244750977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025110244750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044310092926025

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025110244750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044310092926025

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039498805999756

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025110244750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044310092926025

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039498805999756

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006561279296875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025110244750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044310092926025

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039498805999756

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006561279296875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016489028930664

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025110244750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044310092926025

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039498805999756

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006561279296875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016489028930664

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019810199737549

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025110244750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044310092926025

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039498805999756

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006561279296875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016489028930664

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019810199737549

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058388710021973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025110244750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044310092926025

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039498805999756

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006561279296875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016489028930664

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019810199737549

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058388710021973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031449794769287

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0021002292633057

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0021002292633057

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0047180652618408

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0043778419494629

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0043778419494629

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038368701934814

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003338098526001

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003338098526001

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028700828552246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003338098526001

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028700828552246

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020918846130371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003338098526001

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028700828552246

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020918846130371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0065340995788574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003338098526001

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028700828552246

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020918846130371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0065340995788574

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0067849159240723

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003338098526001

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028700828552246

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020918846130371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0065340995788574

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0067849159240723

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0087950229644775

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003338098526001

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028700828552246

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020918846130371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0065340995788574

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0067849159240723

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0087950229644775

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0083169937133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003338098526001

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028700828552246

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020918846130371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0065340995788574

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0067849159240723

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0087950229644775

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0083169937133789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010898113250732

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0034739971160889

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0034739971160889

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0061790943145752

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066995620727539

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066995620727539

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047919750213623

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047919750213623

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0054330825805664

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047919750213623

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0054330825805664

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037698745727539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047919750213623

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0054330825805664

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037698745727539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0043621063232422

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047919750213623

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0054330825805664

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037698745727539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0043621063232422

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041899681091309

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047919750213623

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0054330825805664

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037698745727539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0043621063232422

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041899681091309

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004755973815918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047919750213623

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0054330825805664

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037698745727539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0043621063232422

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041899681091309

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004755973815918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0042269229888916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047919750213623

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0054330825805664

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037698745727539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0043621063232422

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041899681091309

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004755973815918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0042269229888916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039300918579102

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0035040378570557

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0035040378570557

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0039348602294922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0049099922180176

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0049099922180176

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.018308162689209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002424955368042

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002424955368042

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0071139335632324

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002424955368042

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0071139335632324

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037908554077148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002424955368042

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0071139335632324

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037908554077148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0050249099731445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002424955368042

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0071139335632324

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037908554077148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0050249099731445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020530223846436

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002424955368042

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0071139335632324

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037908554077148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0050249099731445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020530223846436

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002094030380249

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002424955368042

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0071139335632324

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037908554077148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0050249099731445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020530223846436

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002094030380249

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039670467376709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002424955368042

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0071139335632324

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037908554077148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0050249099731445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020530223846436

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002094030380249

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039670467376709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054948329925537

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0047259330749512

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0047259330749512

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0045959949493408

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033829212188721

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033829212188721

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0039429664611816

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023260116577148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023260116577148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043609142303467

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023260116577148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043609142303467

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023260116577148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043609142303467

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023260116577148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043609142303467

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023260116577148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043609142303467

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023260116577148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043609142303467

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023260116577148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043609142303467

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049400329589844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027129650115967

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072641372680664

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072641372680664

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00091409683227539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072641372680664

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00091409683227539

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.054074048995972

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072641372680664

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00091409683227539

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.054074048995972

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0023448467254639

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072641372680664

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00091409683227539

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.054074048995972

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0023448467254639

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.063840866088867

select count(*) as cnt from patient_registration where  patient_registration_id= '1208' and  office_id= '1' 
 Execution Time:0.0030579566955566

select count(*) as cnt from patient_registration where  patient_registration_id= '1208' and  office_id= '1' 
 Execution Time:0.0030579566955566

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1208' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048239231109619

select count(*) as cnt from patient_registration where  patient_registration_id= '1208' and  office_id= '1' 
 Execution Time:0.0030579566955566

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1208' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048239231109619

select fname,lname,mrdno from patient_registration where  patient_registration_id='1208' and  office_id= '1' 
 Execution Time:0.01421594619751

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.02077317237854

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.02077317237854

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0023589134216309

select * from investigation where  investigation_id=15  and office_id= 1 and status=1 
 Execution Time:0.0071830749511719

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010144948959351

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010144948959351

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0069711208343506

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010144948959351

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0069711208343506

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026350021362305

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010144948959351

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0069711208343506

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026350021362305

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0068018436431885

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010144948959351

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0069711208343506

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026350021362305

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0068018436431885

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.006803035736084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019738674163818

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019738674163818

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022919178009033

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019738674163818

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022919178009033

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042915344238281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019738674163818

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022919178009033

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042915344238281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022609233856201

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019738674163818

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022919178009033

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042915344238281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022609233856201

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019738674163818

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022919178009033

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042915344238281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022609233856201

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00086092948913574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019738674163818

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022919178009033

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042915344238281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022609233856201

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00086092948913574

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034430027008057

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012719631195068

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0025570392608643

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013210773468018

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0038690567016602

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0038690567016602

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0041060447692871

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00084018707275391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00084018707275391

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016510486602783

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016510486602783

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037200450897217

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016510486602783

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037200450897217

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012040138244629

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016510486602783

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037200450897217

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012040138244629

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016510486602783

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037200450897217

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012040138244629

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052809715270996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016510486602783

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037200450897217

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012040138244629

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052809715270996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026319026947021

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00049710273742676

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00049710273742676

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00017285346984863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0019090175628662

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0011188983917236

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0092341899871826

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0092341899871826

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.003209114074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019669532775879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019669532775879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003040075302124

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019669532775879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003040075302124

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038180351257324

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019669532775879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003040075302124

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038180351257324

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003248929977417

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019669532775879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003040075302124

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038180351257324

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003248929977417

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035760402679443

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019669532775879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003040075302124

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038180351257324

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003248929977417

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035760402679443

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0022778511047363

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019669532775879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003040075302124

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038180351257324

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003248929977417

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035760402679443

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0022778511047363

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0035750865936279

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019669532775879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003040075302124

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038180351257324

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003248929977417

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035760402679443

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0022778511047363

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0035750865936279

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057830810546875

select count(*) as cnt from patient_registration where  patient_registration_id= '1200' and  office_id= '1' 
 Execution Time:0.00062990188598633

select count(*) as cnt from patient_registration where  patient_registration_id= '1200' and  office_id= '1' 
 Execution Time:0.00062990188598633

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1200' and  doctors_registration.office_id= '1' 
 Execution Time:0.002467155456543

select count(*) as cnt from patient_registration where  patient_registration_id= '1200' and  office_id= '1' 
 Execution Time:0.00062990188598633

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1200' and  doctors_registration.office_id= '1' 
 Execution Time:0.002467155456543

select fname,lname,mrdno from patient_registration where  patient_registration_id='1200' and  office_id= '1' 
 Execution Time:0.0006721019744873

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00177001953125

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00177001953125

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0002601146697998

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00072693824768066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select count(*) as cnt from patient_registration where  patient_registration_id= '881' and  office_id= '1' 
 Execution Time:0.012257099151611

select count(*) as cnt from patient_registration where  patient_registration_id= '881' and  office_id= '1' 
 Execution Time:0.012257099151611

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='881' and  doctors_registration.office_id= '1' 
 Execution Time:0.01383900642395

select count(*) as cnt from patient_registration where  patient_registration_id= '881' and  office_id= '1' 
 Execution Time:0.012257099151611

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='881' and  doctors_registration.office_id= '1' 
 Execution Time:0.01383900642395

select fname,lname,mrdno from patient_registration where  patient_registration_id='881' and  office_id= '1' 
 Execution Time:0.0067570209503174

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0044131278991699

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0044131278991699

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0032761096954346

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095987319946289

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095987319946289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095987319946289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095987319946289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060296058654785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095987319946289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060296058654785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095987319946289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060296058654785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095987319946289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060296058654785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082015991210938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095987319946289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060296058654785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082015991210938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002716064453125

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00078797340393066

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00078797340393066

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0053598880767822

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003004789352417

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003004789352417

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017979145050049

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003004789352417

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017979145050049

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003004789352417

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017979145050049

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003004789352417

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017979145050049

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003004789352417

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017979145050049

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023589134216309

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003004789352417

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017979145050049

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023589134216309

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029730796813965

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.01944899559021

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0078539848327637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002655029296875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0021200180053711

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0010688304901123

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0043041706085205

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0043041706085205

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00038290023803711

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0039551258087158

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0039551258087158

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0018420219421387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008091926574707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008091926574707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022740364074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008091926574707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022740364074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037698745727539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008091926574707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022740364074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037698745727539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037391185760498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008091926574707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022740364074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037698745727539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037391185760498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008091926574707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022740364074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037698745727539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037391185760498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081181526184082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008091926574707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022740364074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037698745727539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037391185760498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081181526184082

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017650127410889

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008091926574707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022740364074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037698745727539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037391185760498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081181526184082

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017650127410889

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003108024597168

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0044698715209961

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021576881408691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00046515464782715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00054717063903809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036001205444336

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036001205444336

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0018661022186279

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061511993408203

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061511993408203

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031089782714844

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00053191184997559

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00053191184997559

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00034284591674805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019850730895996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019850730895996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032939910888672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019850730895996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032939910888672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038280487060547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019850730895996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032939910888672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038280487060547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039031505584717

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019850730895996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032939910888672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038280487060547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039031505584717

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010571479797363

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019850730895996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032939910888672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038280487060547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039031505584717

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010571479797363

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030410289764404

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028650760650635

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028650760650635

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028650760650635

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0015349388122559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028650760650635

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0015349388122559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028650760650635

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0015349388122559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0010828971862793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022599697113037

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022599697113037

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022599697113037

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044584274291992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022599697113037

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044584274291992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018320083618164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021209716796875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021209716796875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021209716796875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021209716796875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021209716796875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select count(*) as cnt from patient_registration where  patient_registration_id= '1335' and  office_id= '1' 
 Execution Time:0.00063896179199219

select count(*) as cnt from patient_registration where  patient_registration_id= '1335' and  office_id= '1' 
 Execution Time:0.00063896179199219

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1335' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024340152740479

select count(*) as cnt from patient_registration where  patient_registration_id= '1335' and  office_id= '1' 
 Execution Time:0.00063896179199219

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1335' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024340152740479

select fname,lname,mrdno from patient_registration where  patient_registration_id='1335' and  office_id= '1' 
 Execution Time:0.00037598609924316

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014450550079346

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014450550079346

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0030839443206787

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00047993659973145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060510635375977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060510635375977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032958984375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060510635375977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032958984375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036289691925049

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060510635375977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032958984375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036289691925049

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060510635375977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032958984375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036289691925049

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0038080215454102

select count(*) as cnt from patient_registration where  patient_registration_id= '988' and  office_id= '1' 
 Execution Time:0.0018191337585449

select count(*) as cnt from patient_registration where  patient_registration_id= '988' and  office_id= '1' 
 Execution Time:0.0018191337585449

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='988' and  doctors_registration.office_id= '1' 
 Execution Time:0.0045661926269531

select count(*) as cnt from patient_registration where  patient_registration_id= '988' and  office_id= '1' 
 Execution Time:0.0018191337585449

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='988' and  doctors_registration.office_id= '1' 
 Execution Time:0.0045661926269531

select fname,lname,mrdno from patient_registration where  patient_registration_id='988' and  office_id= '1' 
 Execution Time:0.0061581134796143

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041189193725586

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041189193725586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031919479370117

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041189193725586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031919479370117

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003838062286377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041189193725586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031919479370117

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003838062286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038590431213379

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041189193725586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031919479370117

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003838062286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038590431213379

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003835916519165

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041189193725586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031919479370117

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003838062286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038590431213379

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003835916519165

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038619041442871

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041189193725586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031919479370117

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003838062286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038590431213379

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003835916519165

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038619041442871

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037839412689209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041189193725586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031919479370117

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003838062286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038590431213379

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003835916519165

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038619041442871

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037839412689209

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081019401550293

select count(*) as cnt from patient_registration where  patient_registration_id= '988' and  office_id= '1' 
 Execution Time:0.0028660297393799

select count(*) as cnt from patient_registration where  patient_registration_id= '988' and  office_id= '1' 
 Execution Time:0.0028660297393799

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='988' and  doctors_registration.office_id= '1' 
 Execution Time:0.0036890506744385

select count(*) as cnt from patient_registration where  patient_registration_id= '988' and  office_id= '1' 
 Execution Time:0.0028660297393799

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='988' and  doctors_registration.office_id= '1' 
 Execution Time:0.0036890506744385

select fname,lname,mrdno from patient_registration where  patient_registration_id='988' and  office_id= '1' 
 Execution Time:0.0010650157928467

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00048208236694336

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00048208236694336

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00026392936706543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031058788299561

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031058788299561

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031058788299561

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031058788299561

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031058788299561

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0016069412231445

select count(*) as cnt from patient_registration where  patient_registration_id= '1326' and  office_id= '1' 
 Execution Time:0.0011270046234131

select count(*) as cnt from patient_registration where  patient_registration_id= '1326' and  office_id= '1' 
 Execution Time:0.0011270046234131

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1326' and  doctors_registration.office_id= '1' 
 Execution Time:0.0036001205444336

select count(*) as cnt from patient_registration where  patient_registration_id= '1326' and  office_id= '1' 
 Execution Time:0.0011270046234131

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1326' and  doctors_registration.office_id= '1' 
 Execution Time:0.0036001205444336

select fname,lname,mrdno from patient_registration where  patient_registration_id='1326' and  office_id= '1' 
 Execution Time:0.0019600391387939

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.012174129486084

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.012174129486084

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from investigation where  investigation_id=20  and office_id= 1 and status=1 
 Execution Time:0.00052618980407715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039041042327881

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039041042327881

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012338161468506

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039041042327881

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012338161468506

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.003842830657959

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039041042327881

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012338161468506

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.003842830657959

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0048758983612061

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039041042327881

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012338161468506

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.003842830657959

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0048758983612061

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0038299560546875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045762062072754

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045762062072754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042531490325928

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045762062072754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042531490325928

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036239624023438

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045762062072754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042531490325928

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036239624023438

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0029621124267578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045762062072754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042531490325928

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036239624023438

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0029621124267578

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0030357837677002

select count(*) as cnt from patient_registration where  patient_registration_id= '1326' and  office_id= '1' 
 Execution Time:0.0034058094024658

select count(*) as cnt from patient_registration where  patient_registration_id= '1326' and  office_id= '1' 
 Execution Time:0.0034058094024658

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1326' and  doctors_registration.office_id= '1' 
 Execution Time:0.0037810802459717

select count(*) as cnt from patient_registration where  patient_registration_id= '1326' and  office_id= '1' 
 Execution Time:0.0034058094024658

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1326' and  doctors_registration.office_id= '1' 
 Execution Time:0.0037810802459717

select fname,lname,mrdno from patient_registration where  patient_registration_id='1326' and  office_id= '1' 
 Execution Time:0.0037920475006104

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044083595275879

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044083595275879

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032782554626465

select * from investigation where  investigation_id=20  and office_id= 1 and status=1 
 Execution Time:0.00053000450134277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065569877624512

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065569877624512

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065569877624512

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0017881393432617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065569877624512

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0017881393432617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0047409534454346

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065569877624512

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0017881393432617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0047409534454346

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0039019584655762

select count(*) as cnt from patient_registration where  patient_registration_id= '1326' and  office_id= '1' 
 Execution Time:0.00038504600524902

select count(*) as cnt from patient_registration where  patient_registration_id= '1326' and  office_id= '1' 
 Execution Time:0.00038504600524902

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1326' and  doctors_registration.office_id= '1' 
 Execution Time:0.002345085144043

select count(*) as cnt from patient_registration where  patient_registration_id= '1326' and  office_id= '1' 
 Execution Time:0.00038504600524902

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1326' and  doctors_registration.office_id= '1' 
 Execution Time:0.002345085144043

select fname,lname,mrdno from patient_registration where  patient_registration_id='1326' and  office_id= '1' 
 Execution Time:0.00032711029052734

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0039820671081543

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0039820671081543

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.003835916519165

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0023469924926758

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.014400959014893

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.014400959014893

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021278858184814

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.014400959014893

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021278858184814

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0023560523986816

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.014400959014893

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021278858184814

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0023560523986816

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0017061233520508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.014400959014893

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021278858184814

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0023560523986816

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0017061233520508

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0026941299438477

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028085708618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028085708618164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028085708618164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028085708618164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046515464782715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028085708618164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046515464782715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001849889755249

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00046706199645996

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00046706199645996

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028800964355469

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013339519500732

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013339519500732

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00078821182250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019598007202148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019598007202148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019598007202148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019598007202148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056910514831543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019598007202148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056910514831543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027639865875244

select count(*) as cnt from patient_registration where  patient_registration_id= '727' and  office_id= '1' 
 Execution Time:0.0028650760650635

select count(*) as cnt from patient_registration where  patient_registration_id= '727' and  office_id= '1' 
 Execution Time:0.0028650760650635

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='727' and  doctors_registration.office_id= '1' 
 Execution Time:0.0032210350036621

select count(*) as cnt from patient_registration where  patient_registration_id= '727' and  office_id= '1' 
 Execution Time:0.0028650760650635

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='727' and  doctors_registration.office_id= '1' 
 Execution Time:0.0032210350036621

select fname,lname,mrdno from patient_registration where  patient_registration_id='727' and  office_id= '1' 
 Execution Time:0.0021848678588867

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00057315826416016

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00057315826416016

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031900405883789

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049304962158203

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049304962158203

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00024795532226562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0053529739379883

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0053529739379883

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0037519931793213

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015370845794678

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015370845794678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035130977630615

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015370845794678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035130977630615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036249160766602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015370845794678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035130977630615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036249160766602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015749931335449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015370845794678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035130977630615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036249160766602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015749931335449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003964900970459

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015370845794678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035130977630615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036249160766602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015749931335449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003964900970459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015370845794678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035130977630615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036249160766602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015749931335449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003964900970459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066304206848145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015370845794678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035130977630615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036249160766602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015749931335449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003964900970459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066304206848145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020351409912109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014171600341797

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.001115083694458

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001079797744751

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00038886070251465

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00038886070251465

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00019311904907227

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061392784118652

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061392784118652

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030779838562012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038409233093262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038409233093262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038409233093262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038409233093262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047183036804199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038409233093262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047183036804199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027689933776855

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005791187286377

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005791187286377

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029802322387695

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047087669372559

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047087669372559

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030112266540527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011811256408691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011811256408691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011811256408691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037288665771484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011811256408691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037288665771484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011811256408691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037288665771484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011811256408691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037288665771484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054287910461426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011811256408691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037288665771484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054287910461426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020959377288818

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00059986114501953

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00059986114501953

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00051784515380859

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045108795166016

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045108795166016

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0001981258392334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011579990386963

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011579990386963

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010530948638916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011579990386963

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010530948638916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011579990386963

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010530948638916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063395500183105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011579990386963

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010530948638916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063395500183105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027120113372803

select count(*) as cnt from patient_registration where  patient_registration_id= '1097' and  office_id= '1' 
 Execution Time:0.00036191940307617

select count(*) as cnt from patient_registration where  patient_registration_id= '1097' and  office_id= '1' 
 Execution Time:0.00036191940307617

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1097' and  doctors_registration.office_id= '1' 
 Execution Time:0.0013132095336914

select count(*) as cnt from patient_registration where  patient_registration_id= '1097' and  office_id= '1' 
 Execution Time:0.00036191940307617

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1097' and  doctors_registration.office_id= '1' 
 Execution Time:0.0013132095336914

select fname,lname,mrdno from patient_registration where  patient_registration_id='1097' and  office_id= '1' 
 Execution Time:0.00020480155944824

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00030183792114258

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00030183792114258

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00020003318786621

select count(*) as cnt from patient_registration where  patient_registration_id= '315' and  office_id= '1' 
 Execution Time:0.00039386749267578

select count(*) as cnt from patient_registration where  patient_registration_id= '315' and  office_id= '1' 
 Execution Time:0.00039386749267578

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='315' and  doctors_registration.office_id= '1' 
 Execution Time:0.0013840198516846

select count(*) as cnt from patient_registration where  patient_registration_id= '315' and  office_id= '1' 
 Execution Time:0.00039386749267578

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='315' and  doctors_registration.office_id= '1' 
 Execution Time:0.0013840198516846

select fname,lname,mrdno from patient_registration where  patient_registration_id='315' and  office_id= '1' 
 Execution Time:0.00020909309387207

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037002563476562

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037002563476562

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0001828670501709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070009231567383

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070009231567383

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070009231567383

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013470649719238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070009231567383

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013470649719238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070009231567383

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013470649719238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0015730857849121

select count(*) as cnt from patient_registration where  patient_registration_id= '1097' and  office_id= '1' 
 Execution Time:0.002190113067627

select count(*) as cnt from patient_registration where  patient_registration_id= '1097' and  office_id= '1' 
 Execution Time:0.002190113067627

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1097' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041329860687256

select count(*) as cnt from patient_registration where  patient_registration_id= '1097' and  office_id= '1' 
 Execution Time:0.002190113067627

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1097' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041329860687256

select fname,lname,mrdno from patient_registration where  patient_registration_id='1097' and  office_id= '1' 
 Execution Time:0.0030879974365234

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.059442043304443

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.059442043304443

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048112869262695

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0008399486541748

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00044083595275879

select * from ipdcharge where  ipdcharge_id=7  and office_id= 1 and status=1 
 Execution Time:0.0023651123046875

select * from ipdcharge where  ipdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.0046169757843018

select * from ipdcharge where  ipdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.0014681816101074

select * from ipdcharge where  ipdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00048518180847168

select * from ipdcharge where  ipdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00038695335388184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017440319061279

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017440319061279

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017440319061279

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017440319061279

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017440319061279

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033340454101562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033340454101562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039520263671875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033340454101562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039520263671875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004817008972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033340454101562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039520263671875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004817008972168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015959739685059

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033340454101562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039520263671875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004817008972168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015959739685059

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004227876663208

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033340454101562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039520263671875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004817008972168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015959739685059

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004227876663208

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035800933837891

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033340454101562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039520263671875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004817008972168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015959739685059

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004227876663208

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035800933837891

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037460327148438

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033340454101562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039520263671875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004817008972168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015959739685059

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004227876663208

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035800933837891

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037460327148438

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0082550048828125

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0035960674285889

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0035960674285889

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0032110214233398

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0026779174804688

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0026779174804688

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.004662036895752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011539459228516

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011539459228516

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025420188903809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011539459228516

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025420188903809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031960010528564

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011539459228516

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025420188903809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031960010528564

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033950805664062

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011539459228516

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025420188903809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031960010528564

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033950805664062

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004194974899292

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011539459228516

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025420188903809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031960010528564

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033950805664062

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004194974899292

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0057849884033203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011539459228516

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025420188903809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031960010528564

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033950805664062

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004194974899292

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0057849884033203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064408779144287

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029458999633789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029458999633789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029458999633789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029458999633789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029458999633789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select count(*) as cnt from patient_registration where  patient_registration_id= '1200' and  office_id= '1' 
 Execution Time:0.00026416778564453

select count(*) as cnt from patient_registration where  patient_registration_id= '1200' and  office_id= '1' 
 Execution Time:0.00026416778564453

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1200' and  doctors_registration.office_id= '1' 
 Execution Time:0.0014297962188721

select count(*) as cnt from patient_registration where  patient_registration_id= '1200' and  office_id= '1' 
 Execution Time:0.00026416778564453

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1200' and  doctors_registration.office_id= '1' 
 Execution Time:0.0014297962188721

select fname,lname,mrdno from patient_registration where  patient_registration_id='1200' and  office_id= '1' 
 Execution Time:0.00017309188842773

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003199577331543

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003199577331543

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032305717468262

select * from ipdcharge where  ipdcharge_id=4  and office_id= 1 and status=1 
 Execution Time:0.0014839172363281

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054550170898438

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054550170898438

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015971660614014

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054550170898438

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015971660614014

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054550170898438

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015971660614014

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0065391063690186

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054550170898438

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015971660614014

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0065391063690186

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0032010078430176

select count(*) as cnt from patient_registration where  patient_registration_id= '1334' and  office_id= '1' 
 Execution Time:0.00047707557678223

select count(*) as cnt from patient_registration where  patient_registration_id= '1334' and  office_id= '1' 
 Execution Time:0.00047707557678223

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1334' and  doctors_registration.office_id= '1' 
 Execution Time:0.0022561550140381

select count(*) as cnt from patient_registration where  patient_registration_id= '1334' and  office_id= '1' 
 Execution Time:0.00047707557678223

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1334' and  doctors_registration.office_id= '1' 
 Execution Time:0.0022561550140381

select fname,lname,mrdno from patient_registration where  patient_registration_id='1334' and  office_id= '1' 
 Execution Time:0.00032997131347656

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00085091590881348

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00085091590881348

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0016071796417236

select * from ipdcharge where  ipdcharge_id=4  and office_id= 1 and status=1 
 Execution Time:0.0014688968658447

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034642219543457

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034642219543457

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034642219543457

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004727840423584

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034642219543457

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004727840423584

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034642219543457

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004727840423584

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select count(*) as cnt from patient_registration where  patient_registration_id= '988' and  office_id= '1' 
 Execution Time:0.00042295455932617

select count(*) as cnt from patient_registration where  patient_registration_id= '988' and  office_id= '1' 
 Execution Time:0.00042295455932617

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='988' and  doctors_registration.office_id= '1' 
 Execution Time:0.0013141632080078

select count(*) as cnt from patient_registration where  patient_registration_id= '988' and  office_id= '1' 
 Execution Time:0.00042295455932617

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='988' and  doctors_registration.office_id= '1' 
 Execution Time:0.0013141632080078

select fname,lname,mrdno from patient_registration where  patient_registration_id='988' and  office_id= '1' 
 Execution Time:0.00021791458129883

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0034260749816895

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0034260749816895

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0039310455322266

select * from ipdcharge where  ipdcharge_id=3  and office_id= 1 and status=1 
 Execution Time:0.0047769546508789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00335693359375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00335693359375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081920623779297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00335693359375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081920623779297

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00335693359375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081920623779297

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00335693359375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081920623779297

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select count(*) as cnt from patient_registration where  patient_registration_id= '315' and  office_id= '1' 
 Execution Time:0.0038268566131592

select count(*) as cnt from patient_registration where  patient_registration_id= '315' and  office_id= '1' 
 Execution Time:0.0038268566131592

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='315' and  doctors_registration.office_id= '1' 
 Execution Time:0.0055191516876221

select count(*) as cnt from patient_registration where  patient_registration_id= '315' and  office_id= '1' 
 Execution Time:0.0038268566131592

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='315' and  doctors_registration.office_id= '1' 
 Execution Time:0.0055191516876221

select fname,lname,mrdno from patient_registration where  patient_registration_id='315' and  office_id= '1' 
 Execution Time:0.0030868053436279

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00029611587524414

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00029611587524414

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027108192443848

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0036518573760986

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0036518573760986

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0030980110168457

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041294097900391

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041294097900391

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.008404016494751

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.008404016494751

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033221244812012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.008404016494751

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033221244812012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023629665374756

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.008404016494751

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033221244812012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023629665374756

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019440650939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.008404016494751

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033221244812012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023629665374756

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019440650939941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0048818588256836

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.008404016494751

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033221244812012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023629665374756

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019440650939941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0048818588256836

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030519962310791

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.008404016494751

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033221244812012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023629665374756

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019440650939941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0048818588256836

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030519962310791

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058820247650146

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0059149265289307

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0059149265289307

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0047922134399414

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0040779113769531

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0040779113769531

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0029308795928955

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029518604278564

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029518604278564

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030620098114014

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029518604278564

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030620098114014

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003817081451416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029518604278564

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030620098114014

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003817081451416

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039298534393311

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029518604278564

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030620098114014

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003817081451416

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039298534393311

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0048940181732178

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029518604278564

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030620098114014

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003817081451416

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039298534393311

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0048940181732178

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031030178070068

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029518604278564

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030620098114014

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003817081451416

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039298534393311

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0048940181732178

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031030178070068

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034878253936768

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029518604278564

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030620098114014

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003817081451416

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039298534393311

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0048940181732178

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031030178070068

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034878253936768

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031089782714844

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0052220821380615

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0052220821380615

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.003925085067749

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0026760101318359

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0026760101318359

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0057289600372314

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016046047210693

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016046047210693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094199180603027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016046047210693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094199180603027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016046047210693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094199180603027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.010612964630127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016046047210693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094199180603027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.010612964630127

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016046047210693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094199180603027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.010612964630127

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0068199634552002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016046047210693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094199180603027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.010612964630127

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0068199634552002

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077104568481445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016046047210693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094199180603027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.010612964630127

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0068199634552002

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077104568481445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0082969665527344

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010020732879639

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010020732879639

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010089874267578

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0045080184936523

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0045080184936523

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.011837959289551

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010921955108643

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010921955108643

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.012754917144775

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010921955108643

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.012754917144775

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037498474121094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010921955108643

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.012754917144775

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037498474121094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.006803035736084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010921955108643

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.012754917144775

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037498474121094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.006803035736084

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0057849884033203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010921955108643

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.012754917144775

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037498474121094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.006803035736084

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0057849884033203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014078617095947

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010921955108643

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.012754917144775

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037498474121094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.006803035736084

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0057849884033203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014078617095947

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0061311721801758

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010921955108643

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.012754917144775

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037498474121094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.006803035736084

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0057849884033203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014078617095947

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0061311721801758

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007390022277832

select count(*) as cnt from patient_registration where  patient_registration_id= '1225' and  office_id= '1' 
 Execution Time:0.0026199817657471

select count(*) as cnt from patient_registration where  patient_registration_id= '1225' and  office_id= '1' 
 Execution Time:0.0026199817657471

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1225' and  doctors_registration.office_id= '1' 
 Execution Time:0.0014851093292236

select count(*) as cnt from patient_registration where  patient_registration_id= '1225' and  office_id= '1' 
 Execution Time:0.0026199817657471

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1225' and  doctors_registration.office_id= '1' 
 Execution Time:0.0014851093292236

select fname,lname,mrdno from patient_registration where  patient_registration_id='1225' and  office_id= '1' 
 Execution Time:0.0066208839416504

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00041699409484863

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00041699409484863

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.002467155456543

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00046014785766602

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00046014785766602

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00023698806762695

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011279582977295

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011279582977295

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080409049987793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080409049987793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.007868766784668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080409049987793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.007868766784668

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036869049072266

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080409049987793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.007868766784668

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036869049072266

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0078167915344238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080409049987793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.007868766784668

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036869049072266

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0078167915344238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0060319900512695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080409049987793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.007868766784668

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036869049072266

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0078167915344238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0060319900512695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039272308349609

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080409049987793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.007868766784668

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036869049072266

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0078167915344238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0060319900512695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039272308349609

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038588047027588

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080409049987793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.007868766784668

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036869049072266

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0078167915344238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0060319900512695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039272308349609

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038588047027588

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040719509124756

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00070381164550781

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00070381164550781

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003809928894043

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.018280982971191

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.001939058303833

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0078389644622803

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032980442047119

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032980442047119

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0049209594726562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092911720275879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092911720275879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026650428771973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092911720275879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026650428771973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092911720275879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026650428771973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037310123443604

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092911720275879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026650428771973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037310123443604

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038270950317383

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092911720275879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026650428771973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037310123443604

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038270950317383

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003817081451416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092911720275879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026650428771973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037310123443604

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038270950317383

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003817081451416

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003770112991333

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092911720275879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026650428771973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037310123443604

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038270950317383

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003817081451416

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003770112991333

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055460929870605

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023481845855713

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023481845855713

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023481845855713

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011389255523682

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023481845855713

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011389255523682

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023481845855713

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011389255523682

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00099897384643555

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052518844604492

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052518844604492

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042212009429932

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052518844604492

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042212009429932

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035009384155273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052518844604492

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042212009429932

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035009384155273

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0057849884033203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052518844604492

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042212009429932

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035009384155273

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0057849884033203

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0038208961486816

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033209323883057

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033209323883057

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038261413574219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033209323883057

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038261413574219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015759468078613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033209323883057

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038261413574219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015759468078613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039999485015869

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033209323883057

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038261413574219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015759468078613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039999485015869

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0095598697662354

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033209323883057

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038261413574219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015759468078613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039999485015869

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0095598697662354

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0089960098266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033209323883057

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038261413574219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015759468078613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039999485015869

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0095598697662354

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0089960098266602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037658214569092

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033209323883057

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038261413574219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015759468078613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039999485015869

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0095598697662354

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0089960098266602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037658214569092

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044498443603516

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0016078948974609

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0016078948974609

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0016920566558838

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034918785095215

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034918785095215

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0030670166015625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026149749755859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026149749755859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035548210144043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026149749755859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035548210144043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015308856964111

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026149749755859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035548210144043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015308856964111

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0081191062927246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026149749755859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035548210144043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015308856964111

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0081191062927246

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026149749755859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035548210144043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015308856964111

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0081191062927246

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025460720062256

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026149749755859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035548210144043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015308856964111

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0081191062927246

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025460720062256

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087785720825195

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026149749755859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035548210144043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015308856964111

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0081191062927246

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025460720062256

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087785720825195

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025279521942139

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0038459300994873

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.005770206451416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050048828125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050048828125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017480850219727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050048828125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017480850219727

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00095009803771973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050048828125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017480850219727

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00095009803771973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050048828125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017480850219727

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00095009803771973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0028910636901855

select count(*) as cnt from patient_registration where  patient_registration_id= '315' and  office_id= '1' 
 Execution Time:0.001366138458252

select count(*) as cnt from patient_registration where  patient_registration_id= '315' and  office_id= '1' 
 Execution Time:0.001366138458252

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='315' and  doctors_registration.office_id= '1' 
 Execution Time:0.0069911479949951

select count(*) as cnt from patient_registration where  patient_registration_id= '315' and  office_id= '1' 
 Execution Time:0.001366138458252

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='315' and  doctors_registration.office_id= '1' 
 Execution Time:0.0069911479949951

select fname,lname,mrdno from patient_registration where  patient_registration_id='315' and  office_id= '1' 
 Execution Time:0.0011801719665527

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0039329528808594

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0039329528808594

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043296813964844

select * from ipdcharge where  ipdcharge_id=20  and office_id= 1 and status=1 
 Execution Time:0.0011200904846191

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` IS NULL 
 Execution Time:0.00054812431335449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0021038055419922

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0017929077148438

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038809776306152

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00070714950561523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.004723072052002

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0020289421081543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020558834075928

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00039196014404297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022697448730469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022697448730469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035479068756104

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022697448730469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035479068756104

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040006637573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022697448730469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035479068756104

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040006637573242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026121139526367

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001086950302124

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00043392181396484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0041990280151367

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0038490295410156

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043749809265137

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0046119689941406

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.010877132415771

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010819435119629

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.003587007522583

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0035440921783447

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018658638000488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.004019021987915

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0035810470581055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038800239562988

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0013630390167236

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0013630390167236

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026988983154297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0050718784332275

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0050718784332275

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0017299652099609

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014810562133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014810562133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014810562133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048379898071289

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014810562133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048379898071289

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001741886138916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014810562133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048379898071289

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001741886138916

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014770030975342

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014810562133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048379898071289

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001741886138916

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014770030975342

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014810562133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048379898071289

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001741886138916

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014770030975342

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00096702575683594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014810562133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048379898071289

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001741886138916

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014770030975342

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00096702575683594

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00211501121521

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0011708736419678

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0011708736419678

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.001270055770874

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057005882263184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057005882263184

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00019598007202148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0081222057342529

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0081222057342529

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022561550140381

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0081222057342529

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022561550140381

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015819072723389

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0081222057342529

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022561550140381

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015819072723389

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032141208648682

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0081222057342529

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022561550140381

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015819072723389

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032141208648682

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035450458526611

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0081222057342529

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022561550140381

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015819072723389

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032141208648682

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035450458526611

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0030298233032227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0081222057342529

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022561550140381

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015819072723389

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032141208648682

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035450458526611

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0030298233032227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019998550415039

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0081222057342529

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022561550140381

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015819072723389

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032141208648682

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035450458526611

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0030298233032227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019998550415039

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002964973449707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037503242492676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037503242492676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037503242492676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037503242492676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005040168762207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016751289367676

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031900405883789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031900405883789

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00016999244689941

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0031058788299561

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0031058788299561

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021660327911377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021660327911377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021660327911377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005190372467041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021660327911377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005190372467041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021660327911377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005190372467041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0045599937438965

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021660327911377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005190372467041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0045599937438965

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0044779777526855

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021660327911377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005190372467041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0045599937438965

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0044779777526855

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040309429168701

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026178359985352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026178359985352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025415420532227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026178359985352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025415420532227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010099411010742

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026178359985352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025415420532227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010099411010742

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026178359985352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025415420532227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010099411010742

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063610076904297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026178359985352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025415420532227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010099411010742

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063610076904297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016539096832275

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016539096832275

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016539096832275

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016539096832275

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041508674621582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016539096832275

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041508674621582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023391246795654

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00079107284545898

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00079107284545898

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0016360282897949

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034060478210449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034060478210449

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068187713623047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.028388023376465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.028388023376465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005497932434082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.028388023376465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005497932434082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0072751045227051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.028388023376465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005497932434082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0072751045227051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038471221923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.028388023376465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005497932434082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0072751045227051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038471221923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0077908039093018

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.028388023376465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005497932434082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0072751045227051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038471221923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0077908039093018

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037689208984375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.028388023376465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005497932434082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0072751045227051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038471221923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0077908039093018

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037689208984375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0047550201416016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.028388023376465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005497932434082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0072751045227051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038471221923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0077908039093018

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037689208984375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0047550201416016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044920444488525

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00063800811767578

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00063800811767578

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030899047851562

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0051200389862061

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0051200389862061

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031590461730957

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076985359191895

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076985359191895

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.003197193145752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018200874328613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018200874328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018200874328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004065990447998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018200874328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004065990447998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035388469696045

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018200874328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004065990447998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035388469696045

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038321018218994

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018200874328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004065990447998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035388469696045

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038321018218994

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025379657745361

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018200874328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004065990447998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035388469696045

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038321018218994

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025379657745361

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030429363250732

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018200874328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004065990447998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035388469696045

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038321018218994

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025379657745361

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030429363250732

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043299198150635

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014951229095459

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00041294097900391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316


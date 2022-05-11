select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0092740058898926

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0092740058898926

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028989315032959

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0092740058898926

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028989315032959

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021049976348877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0092740058898926

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028989315032959

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021049976348877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018620491027832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0092740058898926

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028989315032959

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021049976348877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018620491027832

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022430419921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0092740058898926

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028989315032959

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021049976348877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018620491027832

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022430419921875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0092740058898926

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028989315032959

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021049976348877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018620491027832

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022430419921875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002810001373291

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0092740058898926

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028989315032959

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021049976348877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018620491027832

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022430419921875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002810001373291

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032930374145508

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0024728775024414

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0024728775024414

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.004115104675293

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0022730827331543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0022730827331543

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039315223693848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004270076751709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004270076751709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004270076751709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062704086303711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004270076751709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062704086303711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044219493865967

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039689540863037

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039689540863037

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022549629211426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039689540863037

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022549629211426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0064330101013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039689540863037

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022549629211426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0064330101013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037999153137207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039689540863037

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022549629211426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0064330101013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037999153137207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037970542907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039689540863037

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022549629211426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0064330101013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037999153137207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037970542907715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034549236297607

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039689540863037

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022549629211426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0064330101013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037999153137207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037970542907715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034549236297607

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0048098564147949

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039689540863037

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022549629211426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0064330101013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037999153137207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037970542907715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034549236297607

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0048098564147949

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.009911060333252

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00062012672424316

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00062012672424316

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00070095062255859

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060486793518066

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060486793518066

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032615661621094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057721138000488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057721138000488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057721138000488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057721138000488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073003768920898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057721138000488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073003768920898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036509037017822

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010731220245361

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010731220245361

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057816505432129

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0023059844970703

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0023059844970703

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0028529167175293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045204162597656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045204162597656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045204162597656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045204162597656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046586990356445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045204162597656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046586990356445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042970180511475

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0090749263763428

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0090749263763428

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0090749263763428

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0085210800170898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0090749263763428

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0085210800170898

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.013890981674194

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-28' and  '2021-10-28' and  billing_master.office_id= 1        
 Execution Time:0.0016601085662842

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-28' and  '2021-10-28' and  billing_master.office_id= 1        
 Execution Time:0.0016601085662842

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-28' and '2021-10-28' and  patient_registration.office_id= 1      
 Execution Time:0.010930061340332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003917932510376

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003917932510376

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032310485839844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003917932510376

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032310485839844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003917932510376

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032310485839844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003917932510376

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032310485839844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063896179199219

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063896179199219

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033116340637207

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0027961730957031

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0027961730957031

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0018749237060547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013032913208008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013032913208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004011869430542

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013032913208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004011869430542

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027840137481689

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013032913208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004011869430542

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027840137481689

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0044369697570801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013032913208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004011869430542

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027840137481689

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0044369697570801

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042469501495361

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013032913208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004011869430542

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027840137481689

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0044369697570801

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042469501495361

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043840408325195

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013032913208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004011869430542

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027840137481689

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0044369697570801

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042469501495361

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043840408325195

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041990280151367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013032913208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004011869430542

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027840137481689

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0044369697570801

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042469501495361

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043840408325195

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041990280151367

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012912034988403

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041749477386475

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041749477386475

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015590190887451

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041749477386475

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015590190887451

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010631084442139

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041749477386475

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015590190887451

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010631084442139

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-26' and  '2021-10-26' and  billing_master.office_id= 1        
 Execution Time:0.0013580322265625

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-26' and  '2021-10-26' and  billing_master.office_id= 1        
 Execution Time:0.0013580322265625

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-26' and '2021-10-26' and  patient_registration.office_id= 1      
 Execution Time:0.0027449131011963

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.007781982421875

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.007781982421875

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0050561428070068

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0046758651733398

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0046758651733398

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0058598518371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.067004919052124

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.067004919052124

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039680004119873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.067004919052124

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039680004119873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014758110046387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.067004919052124

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039680004119873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014758110046387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025248527526855

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.067004919052124

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039680004119873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014758110046387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025248527526855

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018980503082275

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.067004919052124

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039680004119873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014758110046387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025248527526855

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018980503082275

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031468868255615

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.067004919052124

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039680004119873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014758110046387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025248527526855

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018980503082275

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031468868255615

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0059080123901367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.067004919052124

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039680004119873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014758110046387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025248527526855

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018980503082275

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031468868255615

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0059080123901367

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.022833108901978

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028579235076904

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028579235076904

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028579235076904

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028579235076904

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028579235076904

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004880428314209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004880428314209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004880428314209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004880428314209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074887275695801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004880428314209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074887275695801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041508674621582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061240196228027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061240196228027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032250881195068

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061240196228027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032250881195068

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0025820732116699

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061240196228027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032250881195068

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0025820732116699

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0028049945831299

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061240196228027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032250881195068

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0025820732116699

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0028049945831299

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0038070678710938

select count(*) as cnt from patient_registration where  patient_registration_id= '1957' and  office_id= '1' 
 Execution Time:0.0056140422821045

select count(*) as cnt from patient_registration where  patient_registration_id= '1957' and  office_id= '1' 
 Execution Time:0.0056140422821045

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1957' and  doctors_registration.office_id= '1' 
 Execution Time:0.001816987991333

select count(*) as cnt from patient_registration where  patient_registration_id= '1957' and  office_id= '1' 
 Execution Time:0.0056140422821045

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1957' and  doctors_registration.office_id= '1' 
 Execution Time:0.001816987991333

select fname,lname,mrdno from patient_registration where  patient_registration_id='1957' and  office_id= '1' 
 Execution Time:0.0002751350402832

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010521411895752

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010521411895752

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.01021409034729

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.0006859302520752

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00083494186401367

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039780139923096

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039780139923096

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039780139923096

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039780139923096

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039780139923096

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030210018157959

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030210018157959

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020618438720703

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030210018157959

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020618438720703

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030210018157959

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020618438720703

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030210018157959

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020618438720703

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0024559497833252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030210018157959

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020618438720703

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0024559497833252

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065758228302002

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0010302066802979

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0010302066802979

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0044808387756348

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0018110275268555

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0018110275268555

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036931037902832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036931037902832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040619373321533

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036931037902832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040619373321533

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025629997253418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036931037902832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040619373321533

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025629997253418

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002504825592041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036931037902832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040619373321533

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025629997253418

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002504825592041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036931037902832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040619373321533

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025629997253418

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002504825592041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037569999694824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036931037902832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040619373321533

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025629997253418

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002504825592041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037569999694824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095200538635254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036931037902832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040619373321533

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025629997253418

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002504825592041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037569999694824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095200538635254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045950412750244

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049741268157959

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049741268157959

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049741268157959

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00096392631530762

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049741268157959

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00096392631530762

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049741268157959

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00096392631530762

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018889904022217

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018889904022217

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018889904022217

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036110877990723

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018889904022217

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036110877990723

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018889904022217

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036110877990723

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004270076751709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018889904022217

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036110877990723

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004270076751709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042860507965088

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018889904022217

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036110877990723

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004270076751709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042860507965088

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017189979553223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018889904022217

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036110877990723

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004270076751709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042860507965088

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017189979553223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061690807342529

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0013129711151123

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0013129711151123

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0049629211425781

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.002295970916748

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.002295970916748

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0018799304962158

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089192390441895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089192390441895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089192390441895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077009201049805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089192390441895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077009201049805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089192390441895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077009201049805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089192390441895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077009201049805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076794624328613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089192390441895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077009201049805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076794624328613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043749809265137

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00084185600280762

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00084185600280762

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032305717468262

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0022158622741699

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0022158622741699

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0031850337982178

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043702125549316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043702125549316

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043740272521973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043740272521973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040252208709717

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043740272521973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040252208709717

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038371086120605

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043740272521973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040252208709717

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038371086120605

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037980079650879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043740272521973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040252208709717

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038371086120605

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037980079650879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036571025848389

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043740272521973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040252208709717

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038371086120605

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037980079650879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036571025848389

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0044288635253906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043740272521973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040252208709717

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038371086120605

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037980079650879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036571025848389

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0044288635253906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038940906524658

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043740272521973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040252208709717

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038371086120605

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037980079650879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036571025848389

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0044288635253906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038940906524658

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0096070766448975

select count(*) as cnt from patient_registration where  patient_registration_id= '1457' and  office_id= '1' 
 Execution Time:0.00078010559082031

select count(*) as cnt from patient_registration where  patient_registration_id= '1457' and  office_id= '1' 
 Execution Time:0.00078010559082031

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1457' and  doctors_registration.office_id= '1' 
 Execution Time:0.012372016906738

select count(*) as cnt from patient_registration where  patient_registration_id= '1457' and  office_id= '1' 
 Execution Time:0.00078010559082031

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1457' and  doctors_registration.office_id= '1' 
 Execution Time:0.012372016906738

select fname,lname,mrdno from patient_registration where  patient_registration_id='1457' and  office_id= '1' 
 Execution Time:0.00060606002807617

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00048398971557617

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00048398971557617

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040316581726074

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0009770393371582

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0009770393371582

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036716461181641

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00088000297546387

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00088000297546387

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0004270076751709

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063681602478027

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063681602478027

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027585029602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050115585327148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050115585327148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050115585327148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050115585327148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.000823974609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050115585327148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.000823974609375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025811195373535

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00075793266296387

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00075793266296387

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0016870498657227

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047993659973145

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047993659973145

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027585029602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011608839035034

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011608839035034

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036928653717041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011608839035034

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036928653717041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035829544067383

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011608839035034

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036928653717041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035829544067383

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038120746612549

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011608839035034

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036928653717041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035829544067383

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038120746612549

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0051369667053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011608839035034

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036928653717041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035829544067383

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038120746612549

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0051369667053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004284143447876

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011608839035034

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036928653717041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035829544067383

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038120746612549

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0051369667053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004284143447876

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015978813171387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011608839035034

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036928653717041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035829544067383

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038120746612549

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0051369667053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004284143447876

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015978813171387

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077881813049316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028378963470459

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028378963470459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031540393829346

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028378963470459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031540393829346

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013668537139893

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028378963470459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031540393829346

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013668537139893

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028378963470459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031540393829346

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013668537139893

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select count(*) as cnt from patient_registration where  patient_registration_id= '1958' and  office_id= '1' 
 Execution Time:0.00033998489379883

select count(*) as cnt from patient_registration where  patient_registration_id= '1958' and  office_id= '1' 
 Execution Time:0.00033998489379883

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1958' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033900737762451

select count(*) as cnt from patient_registration where  patient_registration_id= '1958' and  office_id= '1' 
 Execution Time:0.00033998489379883

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1958' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033900737762451

select fname,lname,mrdno from patient_registration where  patient_registration_id='1958' and  office_id= '1' 
 Execution Time:0.00031399726867676

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013399124145508

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013399124145508

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041794776916504

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.0004429817199707

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00048494338989258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038080215454102

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038080215454102

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038080215454102

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038080215454102

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038080215454102

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098419189453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098419189453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098419189453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051379203796387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098419189453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051379203796387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048303604125977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098419189453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051379203796387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048303604125977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098419189453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051379203796387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048303604125977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098419189453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051379203796387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048303604125977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065493583679199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098419189453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051379203796387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048303604125977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065493583679199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040228366851807

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00069904327392578

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00069904327392578

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036096572875977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075101852416992

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075101852416992

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022387504577637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011401176452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011401176452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011401176452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011401176452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060009956359863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011401176452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060009956359863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011401176452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060009956359863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011401176452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060009956359863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054216384887695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011401176452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060009956359863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054216384887695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003248929977417

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044839382171631

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044839382171631

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044839382171631

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00085616111755371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044839382171631

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00085616111755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044839382171631

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00085616111755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select count(*) as cnt from billing_master where  billing_master_id= '319' and  office_id= '1' 
 Execution Time:0.00067806243896484

select count(*) as cnt from billing_master where  billing_master_id= '319' and  office_id= '1' 
 Execution Time:0.00067806243896484

select * from billing_master where  billing_master_id= '319' and  office_id= '1' 
 Execution Time:0.00043296813964844

select count(*) as cnt from billing_master where  billing_master_id= '319' and  office_id= '1' 
 Execution Time:0.00067806243896484

select * from billing_master where  billing_master_id= '319' and  office_id= '1' 
 Execution Time:0.00043296813964844

select * from billing_detail where  billing_master_id= '319' 
 Execution Time:0.00094795227050781

select count(*) as cnt from billing_master where  billing_master_id= '319' and  office_id= '1' 
 Execution Time:0.00067806243896484

select * from billing_master where  billing_master_id= '319' and  office_id= '1' 
 Execution Time:0.00043296813964844

select * from billing_detail where  billing_master_id= '319' 
 Execution Time:0.00094795227050781

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00066089630126953

select count(*) as cnt from billing_master where  billing_master_id= '319' and  office_id= '1' 
 Execution Time:0.00067806243896484

select * from billing_master where  billing_master_id= '319' and  office_id= '1' 
 Execution Time:0.00043296813964844

select * from billing_detail where  billing_master_id= '319' 
 Execution Time:0.00094795227050781

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00066089630126953

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00025796890258789

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0015649795532227

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0015649795532227

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0027670860290527

select count(*) as cnt from patient_registration where  patient_registration_id= '1957' and  office_id= '1' 
 Execution Time:0.00054192543029785

select count(*) as cnt from patient_registration where  patient_registration_id= '1957' and  office_id= '1' 
 Execution Time:0.00054192543029785

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1957' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033559799194336

select count(*) as cnt from patient_registration where  patient_registration_id= '1957' and  office_id= '1' 
 Execution Time:0.00054192543029785

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1957' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033559799194336

select fname,lname,mrdno from patient_registration where  patient_registration_id='1957' and  office_id= '1' 
 Execution Time:0.0025889873504639

select count(*) as cnt from patient_registration where  patient_registration_id= '1957' and  office_id= '1' 
 Execution Time:0.00045895576477051

select count(*) as cnt from patient_registration where  patient_registration_id= '1957' and  office_id= '1' 
 Execution Time:0.00045895576477051

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1957' and  doctors_registration.office_id= '1' 
 Execution Time:0.0035719871520996

select count(*) as cnt from patient_registration where  patient_registration_id= '1957' and  office_id= '1' 
 Execution Time:0.00045895576477051

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1957' and  doctors_registration.office_id= '1' 
 Execution Time:0.0035719871520996

select fname,lname,mrdno from patient_registration where  patient_registration_id='1957' and  office_id= '1' 
 Execution Time:0.0002748966217041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039639472961426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039639472961426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039639472961426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039639472961426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039639472961426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032520294189453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032520294189453

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024280548095703

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041794776916504

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041794776916504

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034284591674805

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060892105102539

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060892105102539

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063681602478027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063681602478027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036919116973877

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044488906860352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044488906860352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044488906860352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044488906860352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044488906860352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043449401855469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043449401855469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011410713195801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043449401855469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011410713195801

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043449401855469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011410713195801

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043449401855469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011410713195801

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041420459747314

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041420459747314

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0009148120880127

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041420459747314

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0009148120880127

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041420459747314

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0009148120880127

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041420459747314

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0009148120880127

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0031411647796631

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0031411647796631

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0024709701538086

select count(*) as cnt from billing_master where  billing_master_id= '320' and  office_id= '1' 
 Execution Time:0.0011301040649414

select count(*) as cnt from billing_master where  billing_master_id= '320' and  office_id= '1' 
 Execution Time:0.0011301040649414

select * from billing_master where  billing_master_id= '320' and  office_id= '1' 
 Execution Time:0.00049185752868652

select count(*) as cnt from billing_master where  billing_master_id= '320' and  office_id= '1' 
 Execution Time:0.0011301040649414

select * from billing_master where  billing_master_id= '320' and  office_id= '1' 
 Execution Time:0.00049185752868652

select * from billing_detail where  billing_master_id= '320' 
 Execution Time:0.00066804885864258

select count(*) as cnt from billing_master where  billing_master_id= '320' and  office_id= '1' 
 Execution Time:0.0011301040649414

select * from billing_master where  billing_master_id= '320' and  office_id= '1' 
 Execution Time:0.00049185752868652

select * from billing_detail where  billing_master_id= '320' 
 Execution Time:0.00066804885864258

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00061392784118652

select count(*) as cnt from patient_registration where  patient_registration_id= '1958' and  office_id= '1' 
 Execution Time:0.0011439323425293

select count(*) as cnt from patient_registration where  patient_registration_id= '1958' and  office_id= '1' 
 Execution Time:0.0011439323425293

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1958' and  doctors_registration.office_id= '1' 
 Execution Time:0.0034668445587158

select count(*) as cnt from patient_registration where  patient_registration_id= '1958' and  office_id= '1' 
 Execution Time:0.0011439323425293

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1958' and  doctors_registration.office_id= '1' 
 Execution Time:0.0034668445587158

select fname,lname,mrdno from patient_registration where  patient_registration_id='1958' and  office_id= '1' 
 Execution Time:0.0027439594268799

select count(*) as cnt from patient_registration where  patient_registration_id= '1958' and  office_id= '1' 
 Execution Time:0.00050997734069824

select count(*) as cnt from patient_registration where  patient_registration_id= '1958' and  office_id= '1' 
 Execution Time:0.00050997734069824

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1958' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030949115753174

select count(*) as cnt from patient_registration where  patient_registration_id= '1958' and  office_id= '1' 
 Execution Time:0.00050997734069824

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1958' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030949115753174

select fname,lname,mrdno from patient_registration where  patient_registration_id='1958' and  office_id= '1' 
 Execution Time:0.00047087669372559

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.048382043838501

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.048382043838501

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047993659973145

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014050006866455

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014050006866455

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0028588771820068

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00068998336791992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032680034637451

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032680034637451

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032680034637451

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032680034637451

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032680034637451

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0089349746704102

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0089349746704102

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0069711208343506

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0089349746704102

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0069711208343506

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035679340362549

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0089349746704102

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0069711208343506

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035679340362549

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.003244161605835

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-26' and  '2021-10-26' and  billing_master.office_id= 1        
 Execution Time:0.0041399002075195

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-26' and  '2021-10-26' and  billing_master.office_id= 1        
 Execution Time:0.0041399002075195

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-26' and '2021-10-26' and  patient_registration.office_id= 1      
 Execution Time:0.014144897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010190010070801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010190010070801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010190010070801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010190010070801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010190010070801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010190010070801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021219253540039

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010190010070801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021219253540039

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056600570678711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010190010070801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021219253540039

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056600570678711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051200389862061

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010490417480469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010490417480469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010490417480469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010490417480469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010490417480469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046801567077637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010490417480469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046801567077637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010490417480469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046801567077637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072598457336426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010490417480469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046801567077637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072598457336426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040240287780762

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0090498924255371

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0090498924255371

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0041139125823975

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054693222045898

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054693222045898

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041294097900391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013401508331299

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013401508331299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013401508331299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013401508331299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013401508331299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013401508331299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013401508331299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051712989807129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013401508331299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051712989807129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041790008544922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00097799301147461

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00097799301147461

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052905082702637

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00056719779968262

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00056719779968262

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016701221466064

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016701221466064

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019888877868652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016701221466064

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019888877868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016701221466064

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019888877868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094389915466309

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016701221466064

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019888877868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094389915466309

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016701221466064

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019888877868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094389915466309

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016701221466064

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019888877868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094389915466309

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057005882263184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016701221466064

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019888877868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094389915466309

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057005882263184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038650035858154

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00046491622924805

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00046491622924805

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034713745117188

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004730224609375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004730224609375

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015571117401123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015571117401123

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015571117401123

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071907043457031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015571117401123

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071907043457031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040130615234375

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.003338098526001

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.003338098526001

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0058739185333252

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081515312194824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081515312194824

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025320053100586

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025320053100586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025320053100586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025320053100586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072002410888672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025320053100586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072002410888672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012218952178955

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025320053100586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072002410888672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012218952178955

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025320053100586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072002410888672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012218952178955

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073695182800293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025320053100586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072002410888672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012218952178955

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073695182800293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049569606781006

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0035631656646729

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0035631656646729

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0033168792724609

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081682205200195

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081682205200195

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0090310573577881

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0090310573577881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0090310573577881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0090310573577881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053715705871582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0090310573577881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053715705871582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0090310573577881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053715705871582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0090310573577881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053715705871582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072884559631348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0090310573577881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053715705871582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072884559631348

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073599815368652

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00046110153198242

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00046110153198242

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041484832763672

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049614906311035

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049614906311035

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037884712219238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020809173583984

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020809173583984

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020809173583984

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020809173583984

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040411949157715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020809173583984

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040411949157715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020809173583984

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040411949157715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020809173583984

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040411949157715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060606002807617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020809173583984

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040411949157715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060606002807617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044701099395752

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081510543823242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081510543823242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081510543823242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0047650337219238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081510543823242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0047650337219238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0028989315032959

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081510543823242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0047650337219238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0028989315032959

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.027594089508057

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0025711059570312

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0025711059570312

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0028162002563477

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0014121532440186

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0014121532440186

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011310577392578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011310577392578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013298988342285

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011310577392578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013298988342285

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011310577392578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013298988342285

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011310577392578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013298988342285

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088620185852051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011310577392578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013298988342285

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088620185852051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031478404998779

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0005650520324707

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0005650520324707

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00045895576477051

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059890747070312

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059890747070312

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032877922058105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036439895629883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036439895629883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036439895629883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036439895629883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067782402038574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036439895629883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067782402038574

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039210319519043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039229393005371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039229393005371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-26' and '2021-10-26' and  patient_registration.office_id= 1      
 Execution Time:0.0045468807220459

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058419704437256

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058419704437256

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039629936218262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058419704437256

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039629936218262

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0022718906402588

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058419704437256

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039629936218262

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0022718906402588

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-26' and  '2021-10-26' and  billing_master.office_id= 1        
 Execution Time:0.0030241012573242

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-26' and  '2021-10-26' and  billing_master.office_id= 1        
 Execution Time:0.0030241012573242

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-26' and '2021-10-26' and  patient_registration.office_id= 1      
 Execution Time:0.0040011405944824

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0022928714752197

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0022928714752197

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0086591243743896

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-26' and  '2021-10-26' and  billing_master.office_id= 1        
 Execution Time:0.0012590885162354

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-26' and  '2021-10-26' and  billing_master.office_id= 1        
 Execution Time:0.0012590885162354

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-26' and '2021-10-26' and  patient_registration.office_id= 1      
 Execution Time:0.0030779838562012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081181526184082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081181526184082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081181526184082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059008598327637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081181526184082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059008598327637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081181526184082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059008598327637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081181526184082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059008598327637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010149478912354

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081181526184082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059008598327637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010149478912354

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042119026184082

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00057196617126465

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00057196617126465

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00022292137145996

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066804885864258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066804885864258

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044083595275879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097393989562988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097393989562988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097393989562988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097393989562988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007331371307373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097393989562988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007331371307373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097393989562988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007331371307373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097393989562988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007331371307373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084280967712402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097393989562988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007331371307373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084280967712402

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052580833435059

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041310787200928

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041310787200928

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041310787200928

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041310787200928

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041310787200928

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001838207244873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001838207244873

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091290473937988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001838207244873

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091290473937988

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034129619598389

select count(*) as cnt from patient_registration where  patient_registration_id= '485' and  office_id= '1' 
 Execution Time:0.00073599815368652

select count(*) as cnt from patient_registration where  patient_registration_id= '485' and  office_id= '1' 
 Execution Time:0.00073599815368652

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='485' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033690929412842

select count(*) as cnt from patient_registration where  patient_registration_id= '485' and  office_id= '1' 
 Execution Time:0.00073599815368652

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='485' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033690929412842

select fname,lname,mrdno from patient_registration where  patient_registration_id='485' and  office_id= '1' 
 Execution Time:0.0013887882232666

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0014739036560059

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0014739036560059

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00042891502380371

select count(*) as cnt from patient_registration where  patient_registration_id= '486' and  office_id= '1' 
 Execution Time:0.00068998336791992

select count(*) as cnt from patient_registration where  patient_registration_id= '486' and  office_id= '1' 
 Execution Time:0.00068998336791992

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='486' and  doctors_registration.office_id= '1' 
 Execution Time:0.0039529800415039

select count(*) as cnt from patient_registration where  patient_registration_id= '486' and  office_id= '1' 
 Execution Time:0.00068998336791992

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='486' and  doctors_registration.office_id= '1' 
 Execution Time:0.0039529800415039

select fname,lname,mrdno from patient_registration where  patient_registration_id='486' and  office_id= '1' 
 Execution Time:0.00033116340637207

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00041413307189941

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00041413307189941

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00026202201843262

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0034799575805664

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0034799575805664

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0036509037017822

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012791156768799

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012791156768799

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001107931137085

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016999244689941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016999244689941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052199363708496

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016999244689941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052199363708496

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037729740142822

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016999244689941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052199363708496

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037729740142822

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014770030975342

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016999244689941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052199363708496

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037729740142822

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014770030975342

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019431114196777

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016999244689941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052199363708496

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037729740142822

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014770030975342

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019431114196777

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031230449676514

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016999244689941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052199363708496

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037729740142822

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014770030975342

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019431114196777

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031230449676514

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039358139038086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016999244689941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052199363708496

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037729740142822

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014770030975342

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019431114196777

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031230449676514

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039358139038086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046510696411133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015628337860107

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015628337860107

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012400150299072

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015628337860107

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012400150299072

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074219703674316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015628337860107

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012400150299072

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074219703674316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062894821166992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015628337860107

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012400150299072

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074219703674316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062894821166992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015628337860107

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012400150299072

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074219703674316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062894821166992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015628337860107

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012400150299072

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074219703674316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062894821166992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011858940124512

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015628337860107

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012400150299072

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074219703674316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062894821166992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011858940124512

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045380592346191

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0036711692810059

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0036711692810059

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0026140213012695

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057291984558105

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057291984558105

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026392936706543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026392936706543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026392936706543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058484077453613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026392936706543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058484077453613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029270648956299

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045299530029297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045299530029297

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013251304626465

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0022220611572266

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0022220611572266

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0021049976348877

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061917304992676

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061917304992676

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037884712219238

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00046801567077637

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00046801567077637

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042605400085449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042605400085449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042605400085449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042605400085449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040793418884277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023250579833984

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0006711483001709

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0006711483001709

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00024795532226562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015108585357666

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015108585357666

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010159015655518

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0073859691619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0073859691619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005490779876709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0073859691619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005490779876709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039589405059814

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0073859691619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005490779876709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039589405059814

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035581588745117

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0073859691619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005490779876709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039589405059814

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035581588745117

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038049221038818

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0073859691619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005490779876709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039589405059814

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035581588745117

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038049221038818

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038068294525146

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0073859691619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005490779876709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039589405059814

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035581588745117

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038049221038818

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038068294525146

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037569999694824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0073859691619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005490779876709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039589405059814

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035581588745117

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038049221038818

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038068294525146

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037569999694824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047271251678467

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035748481750488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035748481750488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023210048675537

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035748481750488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023210048675537

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034220218658447

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035748481750488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023210048675537

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034220218658447

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019659996032715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035748481750488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023210048675537

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034220218658447

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019659996032715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030701160430908

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035748481750488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023210048675537

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034220218658447

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019659996032715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030701160430908

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028760433197021

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035748481750488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023210048675537

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034220218658447

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019659996032715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030701160430908

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028760433197021

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013132095336914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035748481750488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023210048675537

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034220218658447

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019659996032715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030701160430908

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028760433197021

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013132095336914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0085361003875732

select count(*) as cnt from patient_registration where  patient_registration_id= '1461' and  office_id= '1' 
 Execution Time:0.00055694580078125

select count(*) as cnt from patient_registration where  patient_registration_id= '1461' and  office_id= '1' 
 Execution Time:0.00055694580078125

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1461' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038700103759766

select count(*) as cnt from patient_registration where  patient_registration_id= '1461' and  office_id= '1' 
 Execution Time:0.00055694580078125

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1461' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038700103759766

select fname,lname,mrdno from patient_registration where  patient_registration_id='1461' and  office_id= '1' 
 Execution Time:0.00035595893859863

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0004889965057373

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0004889965057373

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00045895576477051

select count(*) as cnt from patient_registration where  patient_registration_id= '1463' and  office_id= '1' 
 Execution Time:0.00041508674621582

select count(*) as cnt from patient_registration where  patient_registration_id= '1463' and  office_id= '1' 
 Execution Time:0.00041508674621582

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1463' and  doctors_registration.office_id= '1' 
 Execution Time:0.0017859935760498

select count(*) as cnt from patient_registration where  patient_registration_id= '1463' and  office_id= '1' 
 Execution Time:0.00041508674621582

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1463' and  doctors_registration.office_id= '1' 
 Execution Time:0.0017859935760498

select fname,lname,mrdno from patient_registration where  patient_registration_id='1463' and  office_id= '1' 
 Execution Time:0.00022482872009277

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00049400329589844

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00049400329589844

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00035214424133301

select count(*) as cnt from patient_registration where  patient_registration_id= '1462' and  office_id= '1' 
 Execution Time:0.0004880428314209

select count(*) as cnt from patient_registration where  patient_registration_id= '1462' and  office_id= '1' 
 Execution Time:0.0004880428314209

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1462' and  doctors_registration.office_id= '1' 
 Execution Time:0.0019149780273438

select count(*) as cnt from patient_registration where  patient_registration_id= '1462' and  office_id= '1' 
 Execution Time:0.0004880428314209

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1462' and  doctors_registration.office_id= '1' 
 Execution Time:0.0019149780273438

select fname,lname,mrdno from patient_registration where  patient_registration_id='1462' and  office_id= '1' 
 Execution Time:0.0002901554107666

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00035405158996582

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00035405158996582

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020384788513184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020384788513184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020384788513184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020384788513184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00030183792114258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020384788513184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00030183792114258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055258274078369

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055258274078369

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035200119018555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055258274078369

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035200119018555

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038330554962158

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055258274078369

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035200119018555

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038330554962158

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017168521881104

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055258274078369

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035200119018555

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038330554962158

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017168521881104

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039670467376709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055258274078369

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035200119018555

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038330554962158

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017168521881104

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039670467376709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018692016601562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055258274078369

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035200119018555

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038330554962158

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017168521881104

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039670467376709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018692016601562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072693824768066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055258274078369

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035200119018555

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038330554962158

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017168521881104

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039670467376709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018692016601562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072693824768066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052690505981445

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00072598457336426

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00072598457336426

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031900405883789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050497055053711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050497055053711

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028681755065918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028681755065918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049877166748047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028681755065918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049877166748047

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028681755065918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049877166748047

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060296058654785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028681755065918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049877166748047

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060296058654785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002687931060791

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00071287155151367

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00071287155151367

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003659725189209

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063300132751465

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063300132751465

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011849403381348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011849403381348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024068355560303

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011849403381348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024068355560303

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011849403381348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024068355560303

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013589859008789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011849403381348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024068355560303

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013589859008789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011849403381348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024068355560303

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013589859008789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011849403381348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024068355560303

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013589859008789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012202262878418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011849403381348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024068355560303

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013589859008789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012202262878418

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037369728088379

select count(*) as cnt from patient_registration where  patient_registration_id= '399' and  office_id= '1' 
 Execution Time:0.00078606605529785

select count(*) as cnt from patient_registration where  patient_registration_id= '399' and  office_id= '1' 
 Execution Time:0.00078606605529785

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='399' and  doctors_registration.office_id= '1' 
 Execution Time:0.0032000541687012

select count(*) as cnt from patient_registration where  patient_registration_id= '399' and  office_id= '1' 
 Execution Time:0.00078606605529785

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='399' and  doctors_registration.office_id= '1' 
 Execution Time:0.0032000541687012

select fname,lname,mrdno from patient_registration where  patient_registration_id='399' and  office_id= '1' 
 Execution Time:0.00035810470581055

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058817863464355

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058817863464355

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038599967956543

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0007781982421875

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0007781982421875

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00032281875610352

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.003864049911499

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.003864049911499

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00093698501586914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042669773101807

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042669773101807

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038161277770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042669773101807

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038161277770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021200180053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042669773101807

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038161277770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021200180053711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021238327026367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042669773101807

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038161277770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021200180053711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021238327026367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031778812408447

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042669773101807

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038161277770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021200180053711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021238327026367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031778812408447

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042669773101807

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038161277770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021200180053711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021238327026367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031778812408447

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023679733276367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042669773101807

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038161277770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021200180053711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021238327026367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031778812408447

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023679733276367

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004586935043335

select count(*) as cnt from patient_registration where  patient_registration_id= '1314' and  office_id= '1' 
 Execution Time:0.00039911270141602

select count(*) as cnt from patient_registration where  patient_registration_id= '1314' and  office_id= '1' 
 Execution Time:0.00039911270141602

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1314' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025990009307861

select count(*) as cnt from patient_registration where  patient_registration_id= '1314' and  office_id= '1' 
 Execution Time:0.00039911270141602

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1314' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025990009307861

select fname,lname,mrdno from patient_registration where  patient_registration_id='1314' and  office_id= '1' 
 Execution Time:0.00022006034851074

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00067496299743652

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00067496299743652

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002739429473877

select count(*) as cnt from patient_registration where  patient_registration_id= '1760' and  office_id= '1' 
 Execution Time:0.00077486038208008

select count(*) as cnt from patient_registration where  patient_registration_id= '1760' and  office_id= '1' 
 Execution Time:0.00077486038208008

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1760' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038120746612549

select count(*) as cnt from patient_registration where  patient_registration_id= '1760' and  office_id= '1' 
 Execution Time:0.00077486038208008

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1760' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038120746612549

select fname,lname,mrdno from patient_registration where  patient_registration_id='1760' and  office_id= '1' 
 Execution Time:0.00031089782714844

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00059008598327637

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00059008598327637

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00030779838562012

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00067400932312012

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00067400932312012

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003509521484375

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00075197219848633

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00075197219848633

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039482116699219

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010659694671631

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010659694671631

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059199333190918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007941722869873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007941722869873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007941722869873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007941722869873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071001052856445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007941722869873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071001052856445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039300918579102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045680999755859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045680999755859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057315826416016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045680999755859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057315826416016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045680999755859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057315826416016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055885314941406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045680999755859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057315826416016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055885314941406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045680999755859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057315826416016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055885314941406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045680999755859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057315826416016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055885314941406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087213516235352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045680999755859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057315826416016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055885314941406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087213516235352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037670135498047

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00081300735473633

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00081300735473633

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042200088500977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054383277893066

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054383277893066

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014190673828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014190673828125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014190673828125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014190673828125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049805641174316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014190673828125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049805641174316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014190673828125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049805641174316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014190673828125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049805641174316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078701972961426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014190673828125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049805641174316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078701972961426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040640830993652

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00078010559082031

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00078010559082031

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030779838562012

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044012069702148

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044012069702148

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040779113769531

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040779113769531

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015120506286621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040779113769531

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015120506286621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015380382537842

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040779113769531

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015120506286621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015380382537842

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040779113769531

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015120506286621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015380382537842

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037598609924316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040779113769531

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015120506286621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015380382537842

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037598609924316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040779113769531

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015120506286621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015380382537842

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037598609924316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060200691223145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040779113769531

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015120506286621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015380382537842

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037598609924316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060200691223145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055859088897705

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041294097900391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041294097900391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041294097900391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041294097900391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042009353637695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041294097900391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042009353637695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024988651275635

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034213066101074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034213066101074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034213066101074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034213066101074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064802169799805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034213066101074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064802169799805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025279521942139

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010409355163574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010409355163574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00098490715026855

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010409355163574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00098490715026855

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014989376068115

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010409355163574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00098490715026855

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014989376068115

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068998336791992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010409355163574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00098490715026855

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014989376068115

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068998336791992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010409355163574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00098490715026855

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014989376068115

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068998336791992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010409355163574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00098490715026855

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014989376068115

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068998336791992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00097894668579102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010409355163574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00098490715026855

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014989376068115

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068998336791992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00097894668579102

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087039470672607

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043890476226807

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043890476226807

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078487396240234

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043890476226807

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078487396240234

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026950836181641

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043890476226807

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078487396240234

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026950836181641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00084805488586426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043890476226807

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078487396240234

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026950836181641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00084805488586426

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0059370994567871

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078730583190918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078730583190918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039048194885254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078730583190918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039048194885254

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.019598960876465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078730583190918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039048194885254

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.019598960876465

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.019711971282959

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-29' and  '2021-10-29' and  billing_master.office_id= 1        
 Execution Time:0.0020840167999268

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-29' and  '2021-10-29' and  billing_master.office_id= 1        
 Execution Time:0.0020840167999268

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-29' and '2021-10-29' and  patient_registration.office_id= 1      
 Execution Time:0.009199857711792


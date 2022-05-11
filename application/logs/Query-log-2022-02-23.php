select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022530555725098

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022530555725098

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026919841766357

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022530555725098

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026919841766357

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001727819442749

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022530555725098

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026919841766357

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001727819442749

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013439655303955

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022530555725098

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026919841766357

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001727819442749

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013439655303955

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015380382537842

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022530555725098

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026919841766357

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001727819442749

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013439655303955

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015380382537842

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015029907226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022530555725098

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026919841766357

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001727819442749

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013439655303955

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015380382537842

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015029907226562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022530555725098

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026919841766357

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001727819442749

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013439655303955

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015380382537842

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015029907226562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016329288482666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022530555725098

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026919841766357

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001727819442749

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013439655303955

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015380382537842

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015029907226562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016329288482666

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022530555725098

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026919841766357

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001727819442749

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013439655303955

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015380382537842

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015029907226562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016329288482666

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0015900135040283

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039911270141602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039911270141602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039911270141602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039911270141602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00094199180603027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039911270141602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00094199180603027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00083112716674805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039911270141602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00094199180603027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00083112716674805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037598609924316

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037598609924316

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00022101402282715

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058388710021973

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058388710021973

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038313865661621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009760856628418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009760856628418

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009760856628418

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0030059814453125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0026428699493408

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0030059814453125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0026428699493408

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0064818859100342

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0030059814453125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0026428699493408

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0064818859100342

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 129 
 Execution Time:0.00043916702270508

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 137 
 Execution Time:0.00025701522827148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0024888515472412

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00083398818969727

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00083398818969727

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032997131347656

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063991546630859

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063991546630859

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050520896911621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050520896911621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050520896911621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050520896911621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072002410888672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050520896911621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072002410888672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006108283996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050520896911621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072002410888672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006108283996582

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003201961517334

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003201961517334

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 130 
 Execution Time:0.00026798248291016

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 138 
 Execution Time:0.00018906593322754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015783309936523

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057196617126465

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00054192543029785

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00054192543029785

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00033712387084961

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046706199645996

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046706199645996

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034539699554443

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034539699554443

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099706649780273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034539699554443

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099706649780273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026760101318359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034539699554443

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099706649780273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026760101318359

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034539699554443

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099706649780273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026760101318359

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086593627929688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034539699554443

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099706649780273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026760101318359

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086593627929688

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034539699554443

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099706649780273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026760101318359

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086593627929688

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028181076049805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034539699554443

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099706649780273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026760101318359

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086593627929688

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028181076049805

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0056149959564209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034539699554443

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099706649780273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026760101318359

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086593627929688

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028181076049805

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0056149959564209

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034539699554443

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099706649780273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026760101318359

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086593627929688

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028181076049805

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0056149959564209

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00074601173400879

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00074601173400879

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00027108192443848

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055599212646484

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055599212646484

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00080704689025879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045490264892578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045490264892578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045490264892578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045490264892578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063896179199219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045490264892578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063896179199219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045490264892578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063896179199219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0044181346893311

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0033490657806396

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0044181346893311

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0033490657806396

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0044181346893311

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0033490657806396

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 132 
 Execution Time:0.0012640953063965

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 140 
 Execution Time:0.00081610679626465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010521411895752

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010521411895752

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0036089420318604

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010521411895752

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0036089420318604

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 132 
 Execution Time:0.0028209686279297

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 140 
 Execution Time:0.00043392181396484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0045390129089355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 132 
 Execution Time:0.0077738761901855

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 140 
 Execution Time:0.00052499771118164

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 132 
 Execution Time:0.0023460388183594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.056076049804688

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.056076049804688

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005948543548584

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0016369819641113

select * from examination where examination_id= '118' and   office_id= '1' 
 Execution Time:0.0012040138244629

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018889904022217

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 118 
 Execution Time:0.011527061462402

select * from examination_chargesdetails where  examination_id= '118' 
 Execution Time:0.0065209865570068

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='54' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.053641080856323

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='33' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00065994262695312

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='16' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00055789947509766

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='19' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00081801414489746

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 133 
 Execution Time:0.00067710876464844

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 141 
 Execution Time:0.00030994415283203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010368824005127

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0011250972747803

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0011250972747803

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037384033203125

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00081396102905273

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00081396102905273

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032305717468262

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010848045349121

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010848045349121

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031185150146484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076484680175781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076484680175781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076484680175781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043797492980957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022678375244141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076484680175781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043797492980957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022678375244141

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019216537475586

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076484680175781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043797492980957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022678375244141

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019216537475586

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078415870666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076484680175781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043797492980957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022678375244141

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019216537475586

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078415870666504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076484680175781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043797492980957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022678375244141

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019216537475586

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078415870666504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 131 
 Execution Time:0.00048494338989258

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 139 
 Execution Time:0.00059390068054199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.002277135848999

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 133 
 Execution Time:0.00071096420288086

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 141 
 Execution Time:0.00029897689819336

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 133 
 Execution Time:0.00094485282897949

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068807601928711

select * from examination where examination_id= '119' and   office_id= '1' 
 Execution Time:0.010331869125366

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 119 
 Execution Time:0.00058102607727051

select * from examination_chargesdetails where  examination_id= '119' 
 Execution Time:0.00058603286743164

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0006709098815918

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0006709098815918

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037598609924316

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0013210773468018

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00089788436889648

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00089788436889648

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00089788436889648

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 130 
 Execution Time:0.00090789794921875

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 138 
 Execution Time:0.00051498413085938

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 130 
 Execution Time:0.0017259120941162

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014498233795166

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014498233795166

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.012555837631226

select * from examination where examination_id= '117' and   office_id= '1' 
 Execution Time:0.0026640892028809

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 117 
 Execution Time:0.00033092498779297

select * from examination_chargesdetails where  examination_id= '117' 
 Execution Time:0.0012941360473633

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060200691223145

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='62' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00066685676574707

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.001060962677002

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 134 
 Execution Time:0.00035810470581055

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 142 
 Execution Time:0.00018095970153809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058817863464355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047016143798828

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047016143798828

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 131 
 Execution Time:0.00043010711669922

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 139 
 Execution Time:0.0002131462097168

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 131 
 Execution Time:0.00061297416687012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016880035400391

select * from examination where examination_id= '120' and   office_id= '1' 
 Execution Time:0.0013298988342285

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 120 
 Execution Time:0.00072383880615234

select * from examination_chargesdetails where  examination_id= '120' 
 Execution Time:0.0005488395690918

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00089097023010254

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00090479850769043

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00090479850769043

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004429817199707

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00088715553283691

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='16' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00066399574279785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 131 
 Execution Time:0.00033092498779297

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 139 
 Execution Time:0.00022602081298828

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 131 
 Execution Time:0.00052213668823242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select * from examination where examination_id= '120' and   office_id= '1' 
 Execution Time:0.0010089874267578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 120 
 Execution Time:0.00024604797363281

select * from examination_chargesdetails where  examination_id= '120' 
 Execution Time:0.00015902519226074

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054192543029785

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054192543029785

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070285797119141

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0007469654083252

SELECT *
FROM `examination`
WHERE `examination_id` = 116 
 Execution Time:0.00086498260498047

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00081992149353027

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00047492980957031

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 129 
 Execution Time:0.00039505958557129

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00045204162597656

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=116 
 Execution Time:0.00089311599731445

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=116 
 Execution Time:0.00074005126953125

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=116 
 Execution Time:0.00051498413085938

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=116 
 Execution Time:0.00039386749267578

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='116' and office_id='1' 
 Execution Time:0.00064802169799805

select * from examination_chargesdetails where  examination_id= '116' 
 Execution Time:0.00027608871459961

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00065493583679199

SELECT *
FROM `examination`
WHERE `examination_id` = 117 
 Execution Time:0.00075197219848633

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.0003058910369873

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00025320053100586

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 130 
 Execution Time:0.00023388862609863

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00018501281738281

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=117 
 Execution Time:0.00057220458984375

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=117 
 Execution Time:0.00034189224243164

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=117 
 Execution Time:0.00032401084899902

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=117 
 Execution Time:0.00023317337036133

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='117' and office_id='1' 
 Execution Time:0.00058412551879883

select * from examination_chargesdetails where  examination_id= '117' 
 Execution Time:0.00018596649169922

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 130 
 Execution Time:0.00042104721069336

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 138 
 Execution Time:0.00031089782714844

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 130 
 Execution Time:0.00047397613525391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043702125549316

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059604644775391

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059604644775391

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00031399726867676

select * from examination where examination_id= '117' and   office_id= '1' 
 Execution Time:0.00062394142150879

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 117 
 Execution Time:0.00025701522827148

select * from examination_chargesdetails where  examination_id= '117' 
 Execution Time:0.00017189979553223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 132 
 Execution Time:0.00049495697021484

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 140 
 Execution Time:0.00024795532226562

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 132 
 Execution Time:0.00078988075256348

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065112113952637

select * from examination where examination_id= '118' and   office_id= '1' 
 Execution Time:0.00082993507385254

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 118 
 Execution Time:0.00051403045654297

select * from examination_chargesdetails where  examination_id= '118' 
 Execution Time:0.00040912628173828

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052094459533691

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052094459533691

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00027799606323242

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00069618225097656

SELECT *
FROM `examination`
WHERE `examination_id` = 120 
 Execution Time:0.00072717666625977

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00026392936706543

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00041699409484863

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 131 
 Execution Time:0.00028896331787109

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00056910514831543

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=120 
 Execution Time:0.00077986717224121

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=120 
 Execution Time:0.00072598457336426

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=120 
 Execution Time:0.00047492980957031

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=120 
 Execution Time:0.00021100044250488

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='120' and office_id='1' 
 Execution Time:0.00054717063903809

select * from examination_chargesdetails where  examination_id= '120' 
 Execution Time:0.00018191337585449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012180805206299

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012180805206299

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012180805206299

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 134 
 Execution Time:0.0011579990386963

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 142 
 Execution Time:0.0010731220245361

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 134 
 Execution Time:0.0013179779052734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select * from examination where examination_id= '121' and   office_id= '1' 
 Execution Time:0.00067615509033203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 121 
 Execution Time:0.0008702278137207

select * from examination_chargesdetails where  examination_id= '121' 
 Execution Time:0.00042200088500977

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00081110000610352

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00081110000610352

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047898292541504

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00098490715026855

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0011651515960693

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 66 
 Execution Time:0.00041079521179199

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 70 
 Execution Time:0.00077700614929199

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 66 
 Execution Time:0.00068187713623047

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select * from examination where examination_id= '68' and   office_id= '1' 
 Execution Time:0.001086950302124

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00085282325744629

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 68 
 Execution Time:0.00044703483581543

select * from examination_chargesdetails where  examination_id= '68' 
 Execution Time:0.00042200088500977

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036907196044922

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007779598236084

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007779598236084

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043511390686035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011401176452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011401176452637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00096583366394043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011401176452637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00096583366394043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011401176452637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00096583366394043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010349750518799

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011401176452637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00096583366394043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010349750518799

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00090312957763672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011401176452637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00096583366394043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010349750518799

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00090312957763672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011401176452637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00096583366394043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010349750518799

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00090312957763672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013041496276855

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011401176452637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00096583366394043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010349750518799

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00090312957763672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013041496276855

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011401176452637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00096583366394043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010349750518799

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00090312957763672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013041496276855

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00089716911315918

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0006248950958252

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0006248950958252

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034093856811523

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038070678710938

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038070678710938

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038690567016602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016939640045166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016939640045166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016939640045166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016939640045166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016939640045166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058603286743164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016939640045166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058603286743164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016939640045166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058603286743164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043678283691406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016939640045166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058603286743164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043678283691406

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064992904663086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016939640045166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058603286743164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043678283691406

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064992904663086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016939640045166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058603286743164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043678283691406

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064992904663086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0011420249938965

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0011420249938965

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00027108192443848

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042414665222168

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042414665222168

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0041599273681641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046610832214355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046610832214355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046610832214355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046610832214355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088095664978027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046610832214355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088095664978027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046610832214355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088095664978027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098800659179688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098800659179688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00095391273498535

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098800659179688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00095391273498535

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 135 
 Execution Time:0.00051498413085938

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 143 
 Execution Time:0.00056886672973633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015599727630615

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0036139488220215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014841556549072

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014841556549072

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010859966278076

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014841556549072

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010859966278076

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011508464813232

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014841556549072

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010859966278076

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011508464813232

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098109245300293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014841556549072

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010859966278076

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011508464813232

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098109245300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014638900756836

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014841556549072

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010859966278076

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011508464813232

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098109245300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014638900756836

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010151863098145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014841556549072

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010859966278076

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011508464813232

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098109245300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014638900756836

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010151863098145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007481575012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014841556549072

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010859966278076

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011508464813232

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098109245300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014638900756836

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010151863098145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007481575012207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013680458068848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014841556549072

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010859966278076

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011508464813232

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098109245300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014638900756836

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010151863098145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007481575012207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013680458068848

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014841556549072

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010859966278076

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011508464813232

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098109245300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014638900756836

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010151863098145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007481575012207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013680458068848

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00097203254699707

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00059986114501953

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00059986114501953

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00023293495178223

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006859302520752

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006859302520752

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053501129150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053501129150391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053501129150391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00058197975158691

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00058197975158691

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0002589225769043

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0007011890411377

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0007011890411377

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096011161804199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096011161804199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096011161804199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00090813636779785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096011161804199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00090813636779785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096011161804199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00090813636779785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096011161804199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00090813636779785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049400329589844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096011161804199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00090813636779785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049400329589844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096011161804199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00090813636779785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049400329589844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010530948638916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096011161804199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00090813636779785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049400329589844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010530948638916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096011161804199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00090813636779785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049400329589844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010530948638916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select count(*) as cnt from patient_registration where  patient_registration_id= '36' and  office_id= '1' 
 Execution Time:0.00045585632324219

select count(*) as cnt from patient_registration where  patient_registration_id= '36' and  office_id= '1' 
 Execution Time:0.00045585632324219

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='36' and  doctors_registration.office_id= '1' 
 Execution Time:0.00082802772521973

select count(*) as cnt from patient_registration where  patient_registration_id= '36' and  office_id= '1' 
 Execution Time:0.00045585632324219

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='36' and  doctors_registration.office_id= '1' 
 Execution Time:0.00082802772521973

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='36' and  office_id= '1' 
 Execution Time:0.00037598609924316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040698051452637

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040698051452637

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023007392883301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069093704223633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069093704223633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069093704223633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069093704223633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066494941711426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069093704223633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066494941711426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069093704223633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066494941711426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0029029846191406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012660026550293

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0029029846191406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012660026550293

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0013189315795898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0029029846191406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012660026550293

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0013189315795898

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 129 
 Execution Time:0.00055384635925293

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 137 
 Execution Time:0.00064396858215332

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 129 
 Execution Time:0.00093698501586914

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0071060657501221

select * from examination where examination_id= '116' and   office_id= '1' 
 Execution Time:0.00061202049255371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 116 
 Execution Time:0.0021579265594482

select * from examination_chargesdetails where  examination_id= '116' 
 Execution Time:0.0013308525085449

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.002781867980957

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0026278495788574

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0026278495788574

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038290023803711

SELECT *
FROM `examination`
WHERE `examination_id` = 116 
 Execution Time:0.0011341571807861

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00065708160400391

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00036096572875977

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 129 
 Execution Time:0.00033187866210938

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.0010387897491455

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=116 
 Execution Time:0.00080704689025879

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=116 
 Execution Time:0.00051593780517578

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=116 
 Execution Time:0.00040006637573242

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=116 
 Execution Time:0.00050592422485352

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='116' and office_id='1' 
 Execution Time:0.00039887428283691

select * from examination_chargesdetails where  examination_id= '116' 
 Execution Time:0.00031185150146484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016918182373047

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016918182373047

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085711479187012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016918182373047

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085711479187012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013580322265625

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016918182373047

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085711479187012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013580322265625

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0012788772583008

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016918182373047

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085711479187012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013580322265625

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0012788772583008

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.004148006439209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001439094543457

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001439094543457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014801025390625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001439094543457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014801025390625

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012421607971191

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001439094543457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014801025390625

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012421607971191

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011169910430908

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001439094543457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014801025390625

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012421607971191

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011169910430908

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001439094543457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014801025390625

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012421607971191

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011169910430908

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001439094543457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014801025390625

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012421607971191

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011169910430908

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001439094543457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014801025390625

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012421607971191

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011169910430908

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012941360473633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001439094543457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014801025390625

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012421607971191

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011169910430908

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012941360473633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001439094543457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014801025390625

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012421607971191

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011169910430908

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012941360473633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621


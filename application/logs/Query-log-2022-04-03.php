select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002647876739502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002647876739502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025398731231689

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002647876739502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025398731231689

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022268295288086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002647876739502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025398731231689

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022268295288086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024778842926025

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002647876739502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025398731231689

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022268295288086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024778842926025

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024740695953369

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002647876739502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025398731231689

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022268295288086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024778842926025

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024740695953369

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024788379669189

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002647876739502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025398731231689

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022268295288086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024778842926025

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024740695953369

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024788379669189

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002647876739502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025398731231689

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022268295288086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024778842926025

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024740695953369

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024788379669189

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0058219432830811

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002647876739502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025398731231689

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022268295288086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024778842926025

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024740695953369

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024788379669189

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0058219432830811

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056800842285156

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002647876739502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025398731231689

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022268295288086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024778842926025

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024740695953369

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024788379669189

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0058219432830811

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056800842285156

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.002655029296875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026607513427734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026607513427734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026607513427734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026607513427734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058102607727051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001399040222168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026607513427734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058102607727051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001399040222168

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003349781036377

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003349781036377

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00025010108947754

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052905082702637

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052905082702637

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042581558227539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045990943908691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045990943908691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011260509490967

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045990943908691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011260509490967

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017650127410889

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017650127410889

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037312507629395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017650127410889

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037312507629395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017650127410889

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037312507629395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017650127410889

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037312507629395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066089630126953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017650127410889

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037312507629395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066089630126953

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017731189727783

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017650127410889

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037312507629395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066089630126953

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017731189727783

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00053596496582031

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00053596496582031

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00019598007202148

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00055289268493652

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00055289268493652

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00027704238891602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005180835723877

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005180835723877

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001431941986084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001431941986084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001431941986084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00072884559631348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001431941986084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00072884559631348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001431941986084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00072884559631348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038695335388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001431941986084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00072884559631348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038695335388184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001431941986084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00072884559631348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038695335388184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034699440002441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001431941986084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00072884559631348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038695335388184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034699440002441

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0040140151977539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001431941986084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00072884559631348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038695335388184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034699440002441

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0040140151977539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046670436859131

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001431941986084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00072884559631348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038695335388184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034699440002441

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0040140151977539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046670436859131

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.002295970916748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090503692626953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090503692626953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090503692626953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090503692626953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090503692626953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090503692626953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090503692626953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090503692626953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011599063873291

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090503692626953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011599063873291

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001816987991333

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090503692626953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011599063873291

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001816987991333

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00055599212646484

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00055599212646484

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00031208992004395

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0031769275665283

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0031769275665283

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0028748512268066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0031380653381348

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0031769275665283

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0028748512268066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0031380653381348

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0035281181335449

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0031769275665283

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0028748512268066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0031380653381348

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0035281181335449

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 769 
 Execution Time:0.0012691020965576

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 884 
 Execution Time:0.00072813034057617

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 884  and `patient_registration_id` = 769 
 Execution Time:0.0043859481811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 769 
 Execution Time:0.00078105926513672

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 884 
 Execution Time:0.00047802925109863

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 884  and `patient_registration_id` = 769 
 Execution Time:0.0003511905670166

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 769 
 Execution Time:0.00044989585876465

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 884 
 Execution Time:0.00025701522827148

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 884  and `patient_registration_id` = 769 
 Execution Time:0.00025105476379395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0026459693908691

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0026459693908691

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044894218444824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053215026855469

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053215026855469

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022506713867188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018820762634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018820762634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010991096496582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018820762634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010991096496582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018820762634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010991096496582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005497932434082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018820762634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010991096496582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005497932434082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00085210800170898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018820762634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010991096496582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005497932434082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00085210800170898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053119659423828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018820762634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010991096496582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005497932434082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00085210800170898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053119659423828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018820762634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010991096496582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005497932434082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00085210800170898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053119659423828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089097023010254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018820762634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010991096496582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005497932434082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00085210800170898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053119659423828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089097023010254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012891292572021

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018820762634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010991096496582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005497932434082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00085210800170898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053119659423828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089097023010254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012891292572021

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011138916015625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011138916015625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001262903213501

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011138916015625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001262903213501

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011138916015625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001262903213501

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011138916015625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001262903213501

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038886070251465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011138916015625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001262903213501

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038886070251465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011138916015625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001262903213501

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038886070251465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011138916015625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001262903213501

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038886070251465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068211555480957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011138916015625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001262903213501

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038886070251465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068211555480957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037839412689209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011138916015625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001262903213501

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038886070251465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068211555480957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037839412689209

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00054597854614258

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00054597854614258

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003669261932373

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00069689750671387

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00069689750671387

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00038814544677734

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058698654174805

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058698654174805

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010008811950684

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042295455932617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042295455932617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042295455932617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061702728271484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042295455932617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061702728271484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001183032989502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042295455932617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061702728271484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001183032989502

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025060176849365

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025060176849365

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064802169799805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025060176849365

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064802169799805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019960403442383

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025060176849365

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064802169799805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019960403442383

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001413106918335

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00083184242248535

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00083184242248535

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00030708312988281

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056099891662598

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056099891662598

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026583671569824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00076985359191895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00076985359191895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00076985359191895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00076985359191895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00076985359191895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00076985359191895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008089542388916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00076985359191895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008089542388916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016930103302002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00076985359191895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008089542388916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016930103302002

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047087669372559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047087669372559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047087669372559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047087669372559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083494186401367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047087669372559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083494186401367

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028929710388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047087669372559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083494186401367

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028929710388184

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0025930404663086

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0025930404663086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016419887542725

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0025930404663086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016419887542725

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0016040802001953

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0025930404663086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016419887542725

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0016040802001953

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 770 
 Execution Time:0.00071001052856445

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 885 
 Execution Time:0.001352071762085

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 885  and `patient_registration_id` = 770 
 Execution Time:0.00033903121948242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 770 
 Execution Time:0.00041484832763672

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 885 
 Execution Time:0.00028896331787109

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 885  and `patient_registration_id` = 770 
 Execution Time:0.00027179718017578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 770 
 Execution Time:0.00064396858215332

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 885 
 Execution Time:0.00060296058654785

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 885  and `patient_registration_id` = 770 
 Execution Time:0.00052785873413086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0044929981231689

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0044929981231689

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037598609924316

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053906440734863

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053906440734863

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038313865661621

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004889965057373

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004889965057373

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001939058303833

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005640983581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005640983581543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005640983581543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005640983581543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078892707824707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005640983581543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078892707824707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012679100036621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005640983581543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078892707824707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012679100036621

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010190010070801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010190010070801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033559799194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010190010070801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033559799194336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010190010070801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033559799194336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010850429534912

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010190010070801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033559799194336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010850429534912

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032119750976562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010190010070801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033559799194336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010850429534912

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032119750976562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010190010070801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033559799194336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010850429534912

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032119750976562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010190010070801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033559799194336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010850429534912

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032119750976562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006558895111084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010190010070801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033559799194336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010850429534912

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032119750976562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006558895111084

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043380260467529

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010190010070801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033559799194336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010850429534912

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032119750976562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006558895111084

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043380260467529

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016231536865234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002842903137207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002842903137207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002953052520752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002842903137207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002953052520752

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00083398818969727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002842903137207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002953052520752

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00083398818969727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002842903137207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002953052520752

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00083398818969727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002842903137207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002953052520752

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00083398818969727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011341571807861

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002842903137207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002953052520752

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00083398818969727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011341571807861

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019369125366211

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002842903137207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002953052520752

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00083398818969727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011341571807861

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019369125366211

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00077986717224121

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00077986717224121

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00022006034851074

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038385391235352

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038385391235352

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014519691467285

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014519691467285

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017809867858887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014519691467285

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017809867858887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014519691467285

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017809867858887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015115737915039

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014519691467285

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017809867858887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015115737915039

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004420280456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014519691467285

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017809867858887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015115737915039

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004420280456543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012998580932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014519691467285

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017809867858887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015115737915039

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004420280456543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012998580932617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098204612731934

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098204612731934

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098204612731934

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 771 
 Execution Time:0.00039315223693848

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 886 
 Execution Time:0.00037503242492676

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 886  and `patient_registration_id` = 771 
 Execution Time:0.00034403800964355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070381164550781

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070381164550781

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028109550476074

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 769 
 Execution Time:0.00034189224243164

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 884 
 Execution Time:0.00021004676818848

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 884  and `patient_registration_id` = 769 
 Execution Time:0.0002288818359375

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 769 
 Execution Time:0.0011558532714844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00080513954162598

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00080513954162598

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00054216384887695

select * from examination where examination_id= '806' and   office_id= '1' 
 Execution Time:0.00164794921875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 806 
 Execution Time:0.0028738975524902

select * from examination_chargesdetails where  examination_id= '806' 
 Execution Time:0.0031418800354004

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0034129619598389

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0034129619598389

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057196617126465

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 773 
 Execution Time:0.00037789344787598

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 888 
 Execution Time:0.00039505958557129

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 888  and `patient_registration_id` = 773 
 Execution Time:0.00027799606323242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064992904663086

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064992904663086

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034904479980469

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0041918754577637

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0041918754577637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0031669139862061

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0099270343780518

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0041918754577637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0031669139862061

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0099270343780518

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.006817102432251

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0041918754577637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0031669139862061

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0099270343780518

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.006817102432251

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 774 
 Execution Time:0.0069959163665771

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 889 
 Execution Time:0.0028600692749023

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 889  and `patient_registration_id` = 774 
 Execution Time:0.0068180561065674

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024609565734863

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00085687637329102

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00085687637329102

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003509521484375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 770 
 Execution Time:0.0005791187286377

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 885 
 Execution Time:0.00028586387634277

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 885  and `patient_registration_id` = 770 
 Execution Time:0.00028705596923828

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 770 
 Execution Time:0.0022428035736084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050497055053711

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050497055053711

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031399726867676

select * from examination where examination_id= '807' and   office_id= '1' 
 Execution Time:0.00066995620727539

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083112716674805

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 807 
 Execution Time:0.00019598007202148

select * from examination_chargesdetails where  examination_id= '807' 
 Execution Time:0.00020098686218262

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00089907646179199

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00089907646179199

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059390068054199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059390068054199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059390068054199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059390068054199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015869140625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059390068054199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015869140625

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016698837280273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059390068054199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015869140625

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016698837280273

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010120868682861

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036759376525879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036759376525879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016360282897949

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036759376525879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016360282897949

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036759376525879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016360282897949

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036759376525879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016360282897949

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00086593627929688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036759376525879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016360282897949

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00086593627929688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021650791168213

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036759376525879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016360282897949

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00086593627929688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021650791168213

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00055599212646484

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00055599212646484

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00024104118347168

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035476684570312

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035476684570312

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 34 
 Execution Time:0.00037693977355957

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 271 
 Execution Time:0.0002589225769043

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 271  and `patient_registration_id` = 34 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031280517578125

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057005882263184

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057005882263184

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00049400329589844

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='91' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0030579566955566

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0011970996856689

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061202049255371

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061202049255371

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029110908508301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013000965118408

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013000965118408

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013000965118408

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013000965118408

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013000965118408

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046014785766602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013000965118408

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046014785766602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013000965118408

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046014785766602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013000965118408

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046014785766602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007939338684082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013000965118408

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046014785766602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007939338684082

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018689632415771

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013000965118408

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046014785766602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007939338684082

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018689632415771

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011188983917236

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011188983917236

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011188983917236

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011188983917236

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 771 
 Execution Time:0.00041699409484863

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 886 
 Execution Time:0.00034213066101074

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 886  and `patient_registration_id` = 771 
 Execution Time:0.00039911270141602

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 771 
 Execution Time:0.0019199848175049

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 771 
 Execution Time:0.00026607513427734

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 886 
 Execution Time:0.00020408630371094

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 886  and `patient_registration_id` = 771 
 Execution Time:0.0005030632019043

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 771 
 Execution Time:0.0011398792266846

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057291984558105

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057291984558105

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0017311573028564

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010001659393311

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010001659393311

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047993659973145

select * from examination where examination_id= '808' and   office_id= '1' 
 Execution Time:0.00066399574279785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 808 
 Execution Time:0.0003960132598877

select * from examination_chargesdetails where  examination_id= '808' 
 Execution Time:0.00041103363037109

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 773 
 Execution Time:0.00028300285339355

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 888 
 Execution Time:0.00074887275695801

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 888  and `patient_registration_id` = 773 
 Execution Time:0.00030517578125

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 773 
 Execution Time:0.0015468597412109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044584274291992

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044584274291992

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054502487182617

select * from examination where examination_id= '809' and   office_id= '1' 
 Execution Time:0.00062203407287598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 809 
 Execution Time:0.00039196014404297

select * from examination_chargesdetails where  examination_id= '809' 
 Execution Time:0.00058817863464355

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077605247497559

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077605247497559

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00025010108947754

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 775 
 Execution Time:0.00041294097900391

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 890 
 Execution Time:0.00030708312988281

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 890  and `patient_registration_id` = 775 
 Execution Time:0.00022506713867188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046586990356445

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046586990356445

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047707557678223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047707557678223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047707557678223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047707557678223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067496299743652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047707557678223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067496299743652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012519359588623

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047707557678223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067496299743652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012519359588623

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001054048538208

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001054048538208

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001054048538208

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001054048538208

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001054048538208

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058507919311523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001054048538208

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058507919311523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001054048538208

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058507919311523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001054048538208

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058507919311523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092792510986328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001054048538208

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058507919311523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092792510986328

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00177001953125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001054048538208

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058507919311523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092792510986328

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00177001953125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00045013427734375

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00045013427734375

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00027894973754883

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0020091533660889

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0020091533660889

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037908554077148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039315223693848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039315223693848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039315223693848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075411796569824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039315223693848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075411796569824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081396102905273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039315223693848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075411796569824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081396102905273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025520324707031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039315223693848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075411796569824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081396102905273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025520324707031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='33' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00061607360839844

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='95' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00053906440734863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001518726348877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001518726348877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013184547424316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001518726348877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013184547424316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001518726348877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013184547424316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001518726348877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013184547424316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004119873046875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001086950302124

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001518726348877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013184547424316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004119873046875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001086950302124

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='77' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010490417480469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043988227844238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043988227844238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00073385238647461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043988227844238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00073385238647461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043988227844238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00073385238647461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074005126953125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043988227844238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00073385238647461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074005126953125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018048286437988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043988227844238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00073385238647461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074005126953125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018048286437988

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049877166748047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049877166748047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049877166748047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031876564025879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049877166748047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031876564025879

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00097298622131348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049877166748047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031876564025879

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00097298622131348

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025360584259033

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049877166748047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031876564025879

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00097298622131348

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025360584259033

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0007021427154541

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0007021427154541

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003209114074707

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 776 
 Execution Time:0.00035881996154785

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 891 
 Execution Time:0.0002129077911377

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 891  and `patient_registration_id` = 776 
 Execution Time:0.00027990341186523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0007169246673584

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0007169246673584

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035881996154785

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056600570678711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056600570678711

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013270378112793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013270378112793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013270378112793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016880035400391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013270378112793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016880035400391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013270378112793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016880035400391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013270378112793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016880035400391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036439895629883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013270378112793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016880035400391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036439895629883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013270378112793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016880035400391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036439895629883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073504447937012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013270378112793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016880035400391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036439895629883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073504447937012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025410652160645

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013270378112793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016880035400391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036439895629883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073504447937012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025410652160645

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0058650970458984

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012998580932617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012998580932617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012998580932617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012998580932617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012998580932617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0023369789123535

select count(*) as cnt from patient_registration where  patient_registration_id= '772' and  office_id= '1' 
 Execution Time:0.00042510032653809

select count(*) as cnt from patient_registration where  patient_registration_id= '772' and  office_id= '1' 
 Execution Time:0.00042510032653809

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=772  
 Execution Time:0.0044269561767578

select count(*) as cnt from patient_registration where  patient_registration_id= '772' and  office_id= '1' 
 Execution Time:0.00042510032653809

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=772  
 Execution Time:0.0044269561767578

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=772  
 Execution Time:0.00075197219848633

select count(*) as cnt from patient_registration where  patient_registration_id= '772' and  office_id= '1' 
 Execution Time:0.00042510032653809

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=772  
 Execution Time:0.0044269561767578

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=772  
 Execution Time:0.00075197219848633

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='772' and  office_id= '1' 
 Execution Time:0.00025796890258789

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00088000297546387

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00088000297546387

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049018859863281

select * from investigation where  investigation_id=19  and office_id= 1 and status=1 
 Execution Time:0.00078582763671875

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011889934539795

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011889934539795

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011889934539795

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011889934539795

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 34 
 Execution Time:0.00072884559631348

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 271 
 Execution Time:0.00040793418884277

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 271  and `patient_registration_id` = 34 
 Execution Time:0.0004279613494873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006108283996582

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006108283996582

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058817863464355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012168884277344

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012168884277344

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012168884277344

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012168884277344

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012168884277344

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033116340637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033116340637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033116340637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033116340637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069594383239746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033116340637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069594383239746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016319751739502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033116340637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069594383239746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016319751739502

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0037548542022705

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0037548542022705

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010969638824463

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0020139217376709

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0037548542022705

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010969638824463

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0020139217376709

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0032858848571777

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0037548542022705

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010969638824463

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0020139217376709

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0032858848571777

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 777 
 Execution Time:0.00052499771118164

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 892 
 Execution Time:0.00029397010803223

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 892  and `patient_registration_id` = 777 
 Execution Time:0.0004420280456543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058603286743164

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058603286743164

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037097930908203

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 774 
 Execution Time:0.00046610832214355

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 889 
 Execution Time:0.00023794174194336

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 889  and `patient_registration_id` = 774 
 Execution Time:0.00024700164794922

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 774 
 Execution Time:0.0011141300201416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051188468933105

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051188468933105

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032591819763184

select * from examination where examination_id= '810' and   office_id= '1' 
 Execution Time:0.004889965057373

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0039629936218262

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 810 
 Execution Time:0.0044739246368408

select * from examination_chargesdetails where  examination_id= '810' 
 Execution Time:0.0015950202941895

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061988830566406

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061988830566406

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004730224609375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015978813171387

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015978813171387

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015978813171387

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 34 
 Execution Time:0.00038886070251465

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 271 
 Execution Time:0.0003509521484375

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 271  and `patient_registration_id` = 34 
 Execution Time:0.0002739429473877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060915946960449

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060915946960449

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047802925109863

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00082921981811523

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00082921981811523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011999607086182

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00082921981811523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011999607086182

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00082921981811523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011999607086182

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 772 
 Execution Time:0.0012578964233398

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 887 
 Execution Time:0.00075507164001465

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 887  and `patient_registration_id` = 772 
 Execution Time:0.00055694580078125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0027120113372803

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0027120113372803

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 772 
 Execution Time:0.006558895111084

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 887 
 Execution Time:0.001082181930542

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 887  and `patient_registration_id` = 772 
 Execution Time:0.00045394897460938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066995620727539

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066995620727539

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038695335388184

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.001276969909668

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.001276969909668

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005347728729248

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.001276969909668

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005347728729248

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.001276969909668

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005347728729248

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 34 
 Execution Time:0.00049805641174316

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 271 
 Execution Time:0.00035905838012695

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 271  and `patient_registration_id` = 34 
 Execution Time:0.00095796585083008

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0017821788787842

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0017821788787842

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032711029052734

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.001291036605835

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.001291036605835

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.001291036605835

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.001291036605835

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 34 
 Execution Time:0.0006861686706543

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 271 
 Execution Time:0.0007169246673584

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 271  and `patient_registration_id` = 34 
 Execution Time:0.00036191940307617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067710876464844

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067710876464844

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00039792060852051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022387504577637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022387504577637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022387504577637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022387504577637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054788589477539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022387504577637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054788589477539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015780925750732

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022387504577637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054788589477539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015780925750732

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00056290626525879

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00056290626525879

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.001568078994751

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060200691223145

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060200691223145

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035214424133301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035214424133301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035214424133301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035214424133301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057005882263184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035214424133301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057005882263184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019230842590332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035214424133301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057005882263184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019230842590332

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019638538360596

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0037682056427002

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0037682056427002

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.001802921295166

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0037682056427002

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.001802921295166

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0037682056427002

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.001802921295166

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 34 
 Execution Time:0.00055193901062012

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 271 
 Execution Time:0.00068998336791992

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 271  and `patient_registration_id` = 34 
 Execution Time:0.00035285949707031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044083595275879

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044083595275879

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038981437683105

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.000640869140625

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.000640869140625

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 772 
 Execution Time:0.00063610076904297

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 887 
 Execution Time:0.00035595893859863

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 887  and `patient_registration_id` = 772 
 Execution Time:0.00040292739868164

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 772 
 Execution Time:0.0011870861053467

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.001025915145874

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.001025915145874

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034904479980469

select * from examination where examination_id= '814' and   office_id= '1' 
 Execution Time:0.00058889389038086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079011917114258

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 814 
 Execution Time:0.00029206275939941

select * from examination_chargesdetails where  examination_id= '814' 
 Execution Time:0.00041413307189941

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013470649719238

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013470649719238

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052189826965332

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084710121154785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084710121154785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010719299316406

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084710121154785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010719299316406

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 778 
 Execution Time:0.00082111358642578

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 893 
 Execution Time:0.00043606758117676

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 893  and `patient_registration_id` = 778 
 Execution Time:0.00037693977355957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066590309143066

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066590309143066

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034880638122559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086021423339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086021423339844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086021423339844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086021423339844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087809562683105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086021423339844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087809562683105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013890266418457

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086021423339844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087809562683105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013890266418457

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00061988830566406

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00061988830566406

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00042295455932617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0009150505065918

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0009150505065918

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017399787902832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017399787902832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039196014404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017399787902832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039196014404297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017399787902832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039196014404297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017399787902832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039196014404297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001168966293335

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017399787902832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039196014404297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001168966293335

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013401508331299

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017399787902832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039196014404297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001168966293335

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013401508331299

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0018408298492432

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0018408298492432

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0018408298492432

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0018408298492432

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 779 
 Execution Time:0.00045108795166016

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 894 
 Execution Time:0.00069904327392578

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 894  and `patient_registration_id` = 779 
 Execution Time:0.00073003768920898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00097894668579102

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00097894668579102

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055510997772217

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055510997772217

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055510997772217

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055510997772217

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055510997772217

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053286552429199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055510997772217

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053286552429199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055510997772217

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053286552429199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055510997772217

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053286552429199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010218620300293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055510997772217

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053286552429199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010218620300293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017268657684326

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055510997772217

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053286552429199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010218620300293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017268657684326

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048708915710449

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048708915710449

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00082111358642578

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003211498260498

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003211498260498

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081491470336914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078487396240234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078487396240234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078487396240234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078487396240234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078487396240234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078487396240234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035405158996582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078487396240234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035405158996582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078487396240234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035405158996582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072693824768066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078487396240234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035405158996582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072693824768066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018079280853271

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078487396240234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035405158996582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072693824768066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018079280853271

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010299682617188

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010299682617188

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010299682617188

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00087285041809082

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010299682617188

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00087285041809082

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 775 
 Execution Time:0.00034189224243164

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 890 
 Execution Time:0.00023388862609863

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 890  and `patient_registration_id` = 775 
 Execution Time:0.00027894973754883

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 775 
 Execution Time:0.0010981559753418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0024421215057373

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0024421215057373

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016040802001953

select * from examination where examination_id= '811' and   office_id= '1' 
 Execution Time:0.00096511840820312

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 811 
 Execution Time:0.00041890144348145

select * from examination_chargesdetails where  examination_id= '811' 
 Execution Time:0.00059986114501953

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004889965057373

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004889965057373

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017094612121582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017094612121582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013613700866699

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017094612121582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013613700866699

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017094612121582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013613700866699

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042510032653809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017094612121582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013613700866699

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042510032653809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013659000396729

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017094612121582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013613700866699

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042510032653809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013659000396729

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015616416931152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015616416931152

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015616416931152

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015616416931152

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015616416931152

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040602684020996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011909008026123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015616416931152

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040602684020996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011909008026123

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00044894218444824

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00044894218444824

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00031900405883789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039196014404297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039196014404297

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036709308624268

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036709308624268

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036709308624268

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057578086853027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036709308624268

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057578086853027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036709308624268

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057578086853027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036709308624268

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057578086853027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036709308624268

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057578086853027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036709308624268

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057578086853027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008089542388916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036709308624268

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057578086853027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008089542388916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015749931335449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036709308624268

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057578086853027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008089542388916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015749931335449

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 776 
 Execution Time:0.00026416778564453

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 891 
 Execution Time:0.00026297569274902

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 891  and `patient_registration_id` = 776 
 Execution Time:0.0027849674224854

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 776 
 Execution Time:0.0016739368438721

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0008540153503418

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0008540153503418

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031399726867676

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055599212646484

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055599212646484

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038003921508789

select * from examination where examination_id= '812' and   office_id= '1' 
 Execution Time:0.00077104568481445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0009620189666748

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 812 
 Execution Time:0.00036311149597168

select * from examination_chargesdetails where  examination_id= '812' 
 Execution Time:0.0005497932434082

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014679431915283

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014679431915283

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

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
		where billing=0 and appointment_date between  '2022-04-03' and '2022-04-03' and  patient_registration.office_id= 1      
 Execution Time:0.0049610137939453

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
		where billing=0 and appointment_date between  '2022-04-03' and '2022-04-02' and  patient_registration.office_id= 1      
 Execution Time:0.0030219554901123

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
		where billing=0 and appointment_date between  '2022-04-02' and '2022-04-02' and  patient_registration.office_id= 1      
 Execution Time:0.0035209655761719

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00065016746520996

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00065016746520996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00065016746520996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00065016746520996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 777 
 Execution Time:0.00038599967956543

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 892 
 Execution Time:0.00057291984558105

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 892  and `patient_registration_id` = 777 
 Execution Time:0.00065803527832031

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 777 
 Execution Time:0.0012249946594238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0032339096069336

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0032339096069336

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047779083251953

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0032339096069336

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047779083251953

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 777 
 Execution Time:0.00037407875061035

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 892 
 Execution Time:0.00019288063049316

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 892  and `patient_registration_id` = 777 
 Execution Time:0.00032496452331543

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 777 
 Execution Time:0.0010900497436523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 777 
 Execution Time:0.0025191307067871

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 892 
 Execution Time:0.0013971328735352

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 892  and `patient_registration_id` = 777 
 Execution Time:0.00099992752075195

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 777 
 Execution Time:0.0018329620361328

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052618980407715

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052618980407715

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035595893859863

select * from examination where examination_id= '813' and   office_id= '1' 
 Execution Time:0.00086188316345215

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 813 
 Execution Time:0.00023102760314941

select * from examination_chargesdetails where  examination_id= '813' 
 Execution Time:0.00021576881408691

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065708160400391

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065708160400391

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036215782165527

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00014209747314453

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00014209747314453

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00014209747314453

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.000244140625

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 780 
 Execution Time:0.00025200843811035

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 895 
 Execution Time:0.00017189979553223

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 895  and `patient_registration_id` = 780 
 Execution Time:0.00015497207641602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012707710266113

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0019888877868652

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0019888877868652

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035381317138672

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010101795196533

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 778 
 Execution Time:0.00025391578674316

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 893 
 Execution Time:0.00036191940307617

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 893  and `patient_registration_id` = 778 
 Execution Time:0.00028586387634277

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 778 
 Execution Time:0.0010910034179688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014209747314453

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0043549537658691

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0043549537658691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0043549537658691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0043549537658691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 778 
 Execution Time:0.00034403800964355

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 893 
 Execution Time:0.00035500526428223

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 893  and `patient_registration_id` = 778 
 Execution Time:0.00031805038452148

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 778 
 Execution Time:0.0015580654144287

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00078177452087402

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00078177452087402

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00078177452087402

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00078177452087402

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 778 
 Execution Time:0.00036096572875977

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 893 
 Execution Time:0.00029206275939941

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 893  and `patient_registration_id` = 778 
 Execution Time:0.00035190582275391

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 778 
 Execution Time:0.0017790794372559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 778 
 Execution Time:0.00032591819763184

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 893 
 Execution Time:0.00025010108947754

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 893  and `patient_registration_id` = 778 
 Execution Time:0.0002899169921875

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 778 
 Execution Time:0.0015151500701904

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00065088272094727

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00065088272094727

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046706199645996

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003821849822998

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003821849822998

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035500526428223

select * from examination where examination_id= '815' and   office_id= '1' 
 Execution Time:0.00061798095703125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 815 
 Execution Time:0.00029802322387695

select * from examination_chargesdetails where  examination_id= '815' 
 Execution Time:0.00019693374633789

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00028276443481445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00015091896057129

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00028276443481445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00015091896057129

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00028276443481445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00015091896057129

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 782 
 Execution Time:0.00030303001403809

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 897 
 Execution Time:0.00020194053649902

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 897  and `patient_registration_id` = 782 
 Execution Time:0.0001518726348877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066804885864258

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066804885864258

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0015289783477783

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0013148784637451

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0013148784637451

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0013148784637451

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0013148784637451

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 778 
 Execution Time:0.00030207633972168

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 893 
 Execution Time:0.00021600723266602

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 893  and `patient_registration_id` = 778 
 Execution Time:0.00017094612121582

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 778 
 Execution Time:0.0012040138244629

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select * from examination where examination_id= '815' and   office_id= '1' 
 Execution Time:0.00097393989562988

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 815 
 Execution Time:0.00026392936706543

select * from examination_chargesdetails where  examination_id= '815' 
 Execution Time:0.00024080276489258

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00089192390441895

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00089192390441895

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055313110351562

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00091099739074707

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00091099739074707

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047993659973145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012519359588623

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012519359588623

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038731098175049

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012519359588623

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038731098175049

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0027050971984863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012519359588623

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038731098175049

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0027050971984863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026998519897461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012519359588623

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038731098175049

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0027050971984863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026998519897461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014569759368896

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012519359588623

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038731098175049

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0027050971984863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026998519897461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014569759368896

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012519359588623

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038731098175049

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0027050971984863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026998519897461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014569759368896

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012519359588623

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038731098175049

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0027050971984863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026998519897461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014569759368896

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014951229095459

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012519359588623

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038731098175049

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0027050971984863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026998519897461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014569759368896

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014951229095459

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022270679473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012519359588623

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038731098175049

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0027050971984863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026998519897461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014569759368896

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014951229095459

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022270679473877

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.003831148147583

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098896026611328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098896026611328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098896026611328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098896026611328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098896026611328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006401538848877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098896026611328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006401538848877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098896026611328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006401538848877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098896026611328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006401538848877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055217742919922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098896026611328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006401538848877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055217742919922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098896026611328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006401538848877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055217742919922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0053040981292725

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0053040981292725

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00041389465332031

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00076007843017578

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00076007843017578

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003960132598877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003960132598877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003960132598877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073099136352539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003960132598877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073099136352539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003960132598877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073099136352539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 206 
 Execution Time:0.0004429817199707

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 276 
 Execution Time:0.00034403800964355

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 276  and `patient_registration_id` = 206 
 Execution Time:0.00052881240844727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00088596343994141

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00088596343994141

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00054407119750977

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 206 
 Execution Time:0.00027608871459961

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 276 
 Execution Time:0.00018906593322754

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 276  and `patient_registration_id` = 206 
 Execution Time:0.00022792816162109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067591667175293

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067591667175293

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044798851013184

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043320655822754

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043320655822754

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031280517578125

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043320655822754

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031280517578125

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 206 
 Execution Time:0.0002448558807373

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 276 
 Execution Time:0.00017595291137695

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 276  and `patient_registration_id` = 206 
 Execution Time:0.00025105476379395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014209747314453

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00076413154602051

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00076413154602051

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051307678222656

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 206 
 Execution Time:0.00033688545227051

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 276 
 Execution Time:0.00076794624328613

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 276  and `patient_registration_id` = 206 
 Execution Time:0.00044989585876465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012898445129395

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012898445129395

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010519027709961

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 206 
 Execution Time:0.0005500316619873

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 276 
 Execution Time:0.00020503997802734

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 276  and `patient_registration_id` = 206 
 Execution Time:0.00020694732666016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0036840438842773

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0036840438842773

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0038981437683105

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0017130374908447

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0017130374908447

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0017130374908447

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0017130374908447

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 780 
 Execution Time:0.0013470649719238

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 895 
 Execution Time:0.0016729831695557

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 895  and `patient_registration_id` = 780 
 Execution Time:0.00058507919311523

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 780 
 Execution Time:0.0019049644470215

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 780 
 Execution Time:0.0003960132598877

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 895 
 Execution Time:0.00030207633972168

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 895  and `patient_registration_id` = 780 
 Execution Time:0.0002601146697998

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 780 
 Execution Time:0.0020360946655273

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select * from examination where examination_id= '817' and   office_id= '1' 
 Execution Time:0.0024058818817139

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016629695892334

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 817 
 Execution Time:0.0039510726928711

select * from examination_chargesdetails where  examination_id= '817' 
 Execution Time:0.0021078586578369

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013010501861572

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013010501861572

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0019500255584717

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0023291110992432

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0023291110992432

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0024142265319824

select count(*) as cnt from patient_registration where  patient_registration_id= '696' and  office_id= '1' 
 Execution Time:0.00031399726867676

select count(*) as cnt from patient_registration where  patient_registration_id= '696' and  office_id= '1' 
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=696  
 Execution Time:0.0028529167175293

select count(*) as cnt from patient_registration where  patient_registration_id= '696' and  office_id= '1' 
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=696  
 Execution Time:0.0028529167175293

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=696  
 Execution Time:0.00079178810119629

select count(*) as cnt from patient_registration where  patient_registration_id= '696' and  office_id= '1' 
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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=696  
 Execution Time:0.0028529167175293

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=696  
 Execution Time:0.00079178810119629

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='696' and  office_id= '1' 
 Execution Time:0.00030398368835449

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00046992301940918

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00046992301940918

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00033402442932129

select count(*) as cnt from patient_appointment where  patient_registration_id = 696 and appointment_date= '2022-04-03' 
 Execution Time:0.0018339157104492

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 781 
 Execution Time:0.0007789134979248

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 896 
 Execution Time:0.00061893463134766

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 896  and `patient_registration_id` = 781 
 Execution Time:0.0002739429473877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 781 
 Execution Time:0.00038313865661621

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 896 
 Execution Time:0.00027799606323242

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 896  and `patient_registration_id` = 781 
 Execution Time:0.00018095970153809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016188621520996

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00072908401489258

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00072908401489258

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00023412704467773

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0008540153503418

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0008540153503418

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032401084899902

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 780 
 Execution Time:0.00029993057250977

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 895 
 Execution Time:0.00024700164794922

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 895  and `patient_registration_id` = 780 
 Execution Time:0.00015902519226074

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 780 
 Execution Time:0.0016689300537109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005497932434082

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005497932434082

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031900405883789

select * from examination where examination_id= '817' and   office_id= '1' 
 Execution Time:0.00078415870666504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 817 
 Execution Time:0.00034618377685547

select * from examination_chargesdetails where  examination_id= '817' 
 Execution Time:0.00040817260742188

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00078606605529785

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00078606605529785

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040698051452637

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 696 
 Execution Time:0.00032687187194824

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 898 
 Execution Time:0.00029397010803223

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 898  and `patient_registration_id` = 696 
 Execution Time:0.00056600570678711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00093889236450195

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00093889236450195

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049901008605957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049901008605957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049901008605957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041959285736084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049901008605957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041959285736084

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001446008682251

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049901008605957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041959285736084

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001446008682251

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00077509880065918

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00077509880065918

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0002589225769043

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054001808166504

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054001808166504

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037980079650879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040912628173828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040912628173828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040912628173828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040912628173828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072193145751953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040912628173828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072193145751953

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019819736480713

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040912628173828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072193145751953

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019819736480713

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042295455932617

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042295455932617

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0001680850982666

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0021319389343262

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0021319389343262

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039482116699219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033791065216064

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033791065216064

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033869743347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033791065216064

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033869743347168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033791065216064

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033869743347168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00095105171203613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033791065216064

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033869743347168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00095105171203613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046181678771973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033791065216064

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033869743347168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00095105171203613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046181678771973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026838779449463

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033791065216064

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033869743347168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00095105171203613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046181678771973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026838779449463

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027823448181152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033791065216064

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033869743347168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00095105171203613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046181678771973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026838779449463

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027823448181152

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00090599060058594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033791065216064

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033869743347168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00095105171203613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046181678771973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026838779449463

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027823448181152

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00090599060058594

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001244068145752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033791065216064

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033869743347168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00095105171203613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046181678771973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026838779449463

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027823448181152

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00090599060058594

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001244068145752

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00173020362854

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00173020362854

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00173020362854

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00173020362854

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0013470649719238

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00095391273498535

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00095391273498535

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00095391273498535

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00095391273498535

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 779 
 Execution Time:0.00041985511779785

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 894 
 Execution Time:0.00032591819763184

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 894  and `patient_registration_id` = 779 
 Execution Time:0.0004730224609375

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 779 
 Execution Time:0.0018260478973389

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select * from examination where examination_id= '816' and   office_id= '1' 
 Execution Time:0.00083804130554199

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 816 
 Execution Time:0.0012621879577637

select * from examination_chargesdetails where  examination_id= '816' 
 Execution Time:0.00049304962158203

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011610984802246

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011610984802246

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00066614151000977

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00088906288146973

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00088906288146973

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00054812431335449

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 696 
 Execution Time:0.0004730224609375

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 898 
 Execution Time:0.00060391426086426

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 898  and `patient_registration_id` = 696 
 Execution Time:0.0004420280456543

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 696 
 Execution Time:0.0020170211791992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010781288146973

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010781288146973

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037813186645508

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00060200691223145

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00060200691223145

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00077009201049805

select * from examination where examination_id= '820' and   office_id= '1' 
 Execution Time:0.0013289451599121

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010788440704346

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 820 
 Execution Time:0.00060296058654785

select * from examination_chargesdetails where  examination_id= '820' 
 Execution Time:0.00078582763671875

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 780 
 Execution Time:0.00035881996154785

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 895 
 Execution Time:0.00023102760314941

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 895  and `patient_registration_id` = 780 
 Execution Time:0.00097799301147461

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 780 
 Execution Time:0.0011510848999023

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select * from examination where examination_id= '817' and   office_id= '1' 
 Execution Time:0.0045158863067627

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011169910430908

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 817 
 Execution Time:0.00085806846618652

select * from examination_chargesdetails where  examination_id= '817' 
 Execution Time:0.00053215026855469

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0009009838104248

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0009009838104248

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052309036254883

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00059294700622559

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00059294700622559

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032615661621094

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0037140846252441

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0037140846252441

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00044012069702148

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0014481544494629

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0014481544494629

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0042569637298584

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='1' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00068283081054688

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 783 
 Execution Time:0.00039911270141602

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 899 
 Execution Time:0.00033402442932129

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 899  and `patient_registration_id` = 783 
 Execution Time:0.00025796890258789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069308280944824

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069308280944824

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032615661621094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010368824005127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010368824005127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010368824005127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010368824005127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010368824005127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059103965759277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010368824005127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059103965759277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010368824005127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059103965759277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010368824005127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059103965759277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010168552398682

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010368824005127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059103965759277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010168552398682

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018389225006104

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010368824005127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059103965759277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010168552398682

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018389225006104

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0046079158782959

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0046079158782959

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048589706420898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080418586730957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080418586730957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080418586730957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080418586730957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080418586730957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080418586730957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080418586730957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080418586730957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055718421936035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080418586730957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055718421936035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018770694732666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080418586730957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055718421936035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018770694732666

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 784 
 Execution Time:0.00086402893066406

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 900 
 Execution Time:0.00066089630126953

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 900  and `patient_registration_id` = 784 
 Execution Time:0.00031900405883789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00072503089904785

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00072503089904785

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035691261291504

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0033209323883057

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0033209323883057

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00043106079101562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075221061706543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075221061706543

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025582313537598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00083494186401367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00083494186401367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00083494186401367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00083494186401367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013201236724854

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00083494186401367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013201236724854

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020129680633545

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00083494186401367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013201236724854

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020129680633545

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 781 
 Execution Time:0.00051712989807129

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 896 
 Execution Time:0.00030207633972168

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 896  and `patient_registration_id` = 781 
 Execution Time:0.0002739429473877

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 781 
 Execution Time:0.0014238357543945

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077104568481445

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077104568481445

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003361701965332

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00092387199401855

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00092387199401855

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055503845214844

select * from examination where examination_id= '819' and   office_id= '1' 
 Execution Time:0.0010280609130859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0065510272979736

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 819 
 Execution Time:0.00060105323791504

select * from examination_chargesdetails where  examination_id= '819' 
 Execution Time:0.00056314468383789

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0040841102600098

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0040841102600098

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0061759948730469

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0099339485168457

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0040841102600098

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0061759948730469

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0099339485168457

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0022079944610596

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0040841102600098

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0061759948730469

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0099339485168457

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0022079944610596

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 781 
 Execution Time:0.0023541450500488

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 896 
 Execution Time:0.0077118873596191

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 896  and `patient_registration_id` = 781 
 Execution Time:0.0038480758666992

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 781 
 Execution Time:0.0033869743347168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034620761871338

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0042848587036133

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0042848587036133

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0022149085998535

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0045859813690186

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0042848587036133

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0022149085998535

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0045859813690186

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0028409957885742

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0042848587036133

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0022149085998535

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0045859813690186

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0028409957885742

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 781 
 Execution Time:0.0061089992523193

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 896 
 Execution Time:0.003774881362915

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 896  and `patient_registration_id` = 781 
 Execution Time:0.0022549629211426

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 781 
 Execution Time:0.0070400238037109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.005558967590332

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0020501613616943

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0020501613616943

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00091290473937988

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052905082702637

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052905082702637

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0032889842987061

select * from examination where examination_id= '819' and   office_id= '1' 
 Execution Time:0.0053441524505615

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.003878116607666

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 819 
 Execution Time:0.0009920597076416

select * from examination_chargesdetails where  examination_id= '819' 
 Execution Time:0.0089240074157715

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0015718936920166

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053620338439941

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053620338439941

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 785 
 Execution Time:0.00034785270690918

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 901 
 Execution Time:0.00033402442932129

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 901  and `patient_registration_id` = 785 
 Execution Time:0.00079202651977539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 785 
 Execution Time:0.00038599967956543

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 901 
 Execution Time:0.00027894973754883

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 901  and `patient_registration_id` = 785 
 Execution Time:0.00028514862060547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00061798095703125

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00061798095703125

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043106079101562

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00089406967163086

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00089406967163086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002418041229248

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00089406967163086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002418041229248

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00089406967163086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002418041229248

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 785 
 Execution Time:0.00032496452331543

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 901 
 Execution Time:0.00023412704467773

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 901  and `patient_registration_id` = 785 
 Execution Time:0.00051999092102051

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 785 
 Execution Time:0.0018820762634277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select * from examination where examination_id= '823' and   office_id= '1' 
 Execution Time:0.00066995620727539

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014560222625732

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 823 
 Execution Time:0.00060081481933594

select * from examination_chargesdetails where  examination_id= '823' 
 Execution Time:0.00042104721069336

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060200691223145

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060200691223145

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052714347839355

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059604644775391

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059604644775391

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0046331882476807

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='104' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0011069774627686

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='32' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00085091590881348

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00097513198852539

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035977363586426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035977363586426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035977363586426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 785 
 Execution Time:0.00024986267089844

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 901 
 Execution Time:0.00021886825561523

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 901  and `patient_registration_id` = 785 
 Execution Time:0.00022006034851074

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 785 
 Execution Time:0.0012040138244629

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059199333190918

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059199333190918

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035786628723145

select * from examination where examination_id= '823' and   office_id= '1' 
 Execution Time:0.0010130405426025

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 823 
 Execution Time:0.00052690505981445

select * from examination_chargesdetails where  examination_id= '823' 
 Execution Time:0.00035309791564941

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00071811676025391

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00071811676025391

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.001133918762207

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='46' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010960102081299

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='9' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00060009956359863

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='112' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00094509124755859

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00089812278747559

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00089812278747559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00089812278747559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00089812278747559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 783 
 Execution Time:0.0053231716156006

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 899 
 Execution Time:0.00068283081054688

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 899  and `patient_registration_id` = 783 
 Execution Time:0.00075507164001465

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 783 
 Execution Time:0.0017139911651611

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069999694824219

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069999694824219

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059413909912109

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069999694824219

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069999694824219

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select * from examination where examination_id= '821' and   office_id= '1' 
 Execution Time:0.00097298622131348

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 821 
 Execution Time:0.00078392028808594

select * from examination_chargesdetails where  examination_id= '821' 
 Execution Time:0.00037813186645508

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='1' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00074601173400879

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='65' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0011138916015625

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 784 
 Execution Time:0.00027203559875488

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 900 
 Execution Time:0.00018119812011719

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 900  and `patient_registration_id` = 784 
 Execution Time:0.00021195411682129

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 784 
 Execution Time:0.0013229846954346

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select * from examination where examination_id= '822' and   office_id= '1' 
 Execution Time:0.00097107887268066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 822 
 Execution Time:0.0002748966217041

select * from examination_chargesdetails where  examination_id= '822' 
 Execution Time:0.00021004676818848

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069594383239746

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069594383239746

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042104721069336

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00062799453735352

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00062799453735352

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00039196014404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003201961517334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003201961517334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003201961517334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003201961517334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092577934265137

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003201961517334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092577934265137

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012421607971191

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003201961517334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092577934265137

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012421607971191

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0012691020965576

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0012691020965576

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.003148078918457

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00087118148803711

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0012691020965576

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.003148078918457

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00087118148803711

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0025670528411865

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0012691020965576

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.003148078918457

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00087118148803711

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0025670528411865

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 206 
 Execution Time:0.00055193901062012

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 276 
 Execution Time:0.00040817260742188

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 276  and `patient_registration_id` = 206 
 Execution Time:0.00075197219848633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.001784086227417

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.001784086227417

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044608116149902

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.018231868743896

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.018231868743896

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0033700466156006

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0034489631652832

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.018231868743896

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0033700466156006

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0034489631652832

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0039570331573486

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.018231868743896

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0033700466156006

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0034489631652832

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0039570331573486

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 206 
 Execution Time:0.0031192302703857

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 276 
 Execution Time:0.0016069412231445

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 276  and `patient_registration_id` = 206 
 Execution Time:0.0017831325531006

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040481090545654

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0016489028930664

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0016489028930664

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 206 
 Execution Time:0.00056886672973633

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 276 
 Execution Time:0.0005640983581543

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 276  and `patient_registration_id` = 206 
 Execution Time:0.0010411739349365

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00086092948913574

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00086092948913574

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00039911270141602

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 206 
 Execution Time:0.00042200088500977

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 276 
 Execution Time:0.00047087669372559

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 276  and `patient_registration_id` = 206 
 Execution Time:0.00057101249694824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00079488754272461

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00079488754272461

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0025219917297363

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 206 
 Execution Time:0.00044918060302734

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 276 
 Execution Time:0.0003809928894043

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 276  and `patient_registration_id` = 206 
 Execution Time:0.00035285949707031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066709518432617

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066709518432617

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0017859935760498

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00081014633178711

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00081014633178711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079011917114258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00081014633178711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079011917114258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00081014633178711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079011917114258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 206 
 Execution Time:0.0008699893951416

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 276 
 Execution Time:0.00041007995605469

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 276  and `patient_registration_id` = 206 
 Execution Time:0.00136399269104

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00086498260498047

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00086498260498047

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030612945556641

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029420852661133

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029420852661133

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 206 
 Execution Time:0.00031495094299316

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 276 
 Execution Time:0.0002591609954834

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 276  and `patient_registration_id` = 206 
 Execution Time:0.00022006034851074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066304206848145

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066304206848145

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003669261932373

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 206 
 Execution Time:0.00047802925109863

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 276 
 Execution Time:0.00054407119750977

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 276  and `patient_registration_id` = 206 
 Execution Time:0.0002741813659668

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066494941711426

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066494941711426

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053906440734863

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 206 
 Execution Time:0.00034189224243164

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 276 
 Execution Time:0.00028204917907715

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 276  and `patient_registration_id` = 206 
 Execution Time:0.0004420280456543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00059294700622559

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00059294700622559

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0007319450378418

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 206 
 Execution Time:0.0003209114074707

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 276 
 Execution Time:0.00026106834411621

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 276  and `patient_registration_id` = 206 
 Execution Time:0.00026082992553711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004570484161377

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004570484161377

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 206 
 Execution Time:0.0003819465637207

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 276 
 Execution Time:0.00032711029052734

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 276  and `patient_registration_id` = 206 
 Execution Time:0.0003199577331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006711483001709

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006711483001709

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041699409484863


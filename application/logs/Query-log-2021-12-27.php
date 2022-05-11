select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0041050910949707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0041050910949707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0041050910949707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048568248748779

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0041050910949707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048568248748779

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0041050910949707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048568248748779

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0041050910949707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048568248748779

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057101249694824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0041050910949707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048568248748779

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057101249694824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003277063369751

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018298625946045

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018298625946045

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012681484222412

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018298625946045

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012681484222412

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013070106506348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018298625946045

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012681484222412

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013070106506348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012359619140625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018298625946045

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012681484222412

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013070106506348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012359619140625

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011389255523682

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018298625946045

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012681484222412

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013070106506348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012359619140625

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011389255523682

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012011528015137

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018298625946045

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012681484222412

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013070106506348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012359619140625

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011389255523682

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012011528015137

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018298625946045

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012681484222412

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013070106506348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012359619140625

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011389255523682

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012011528015137

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014610290527344

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018298625946045

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012681484222412

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013070106506348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012359619140625

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011389255523682

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012011528015137

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014610290527344

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00055408477783203

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00055408477783203

select patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00037789344787598

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.0006561279296875

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.0006561279296875

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0010519027709961

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.0006561279296875

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0010519027709961

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00032997131347656

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00059890747070312

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00059890747070312

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00035786628723145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0028982162475586

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.002593994140625

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0028982162475586

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.002593994140625

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0024960041046143

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0028982162475586

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.002593994140625

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0024960041046143

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00040817260742188

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 112 
 Execution Time:0.00029206275939941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017950534820557

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0030438899993896

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017950534820557

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0030438899993896

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0014660358428955

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017950534820557

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0030438899993896

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0014660358428955

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.0019509792327881

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 112 
 Execution Time:0.0038778781890869

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039150714874268

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00047111511230469

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 112 
 Execution Time:0.00039982795715332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0024838447570801

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0037281513214111

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0024838447570801

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0037281513214111

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0017030239105225

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0024838447570801

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0037281513214111

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0017030239105225

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00065803527832031

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 112 
 Execution Time:0.003889799118042

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038778781890869

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0055129528045654

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0025010108947754

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0055129528045654

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0025010108947754

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0076408386230469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0055129528045654

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0025010108947754

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0076408386230469

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.0033140182495117

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 112 
 Execution Time:0.0037689208984375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038869380950928

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005497932434082

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005497932434082

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005497932434082

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00037908554077148

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 112 
 Execution Time:0.00026702880859375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.0003049373626709

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 112 
 Execution Time:0.00023603439331055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00036907196044922

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 112 
 Execution Time:0.00032901763916016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00050806999206543

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 112 
 Execution Time:0.0010130405426025

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084114074707031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00075483322143555

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084114074707031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00075483322143555

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084114074707031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00075483322143555

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00068902969360352

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 112 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105


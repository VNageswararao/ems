select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024921894073486

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024921894073486

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017790794372559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024921894073486

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017790794372559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017621517181396

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024921894073486

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017790794372559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017621517181396

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017538070678711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024921894073486

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017790794372559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017621517181396

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017538070678711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022969245910645

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024921894073486

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017790794372559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017621517181396

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017538070678711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022969245910645

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001471996307373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024921894073486

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017790794372559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017621517181396

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017538070678711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022969245910645

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001471996307373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024921894073486

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017790794372559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017621517181396

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017538070678711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022969245910645

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001471996307373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021860599517822

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024921894073486

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017790794372559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017621517181396

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017538070678711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022969245910645

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001471996307373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021860599517822

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024921894073486

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017790794372559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017621517181396

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017538070678711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022969245910645

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001471996307373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021860599517822

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0040278434753418

select count(*) as cnt from patient_registration where  patient_registration_id= '165' and  office_id= '1' 
 Execution Time:0.0005650520324707

select count(*) as cnt from patient_registration where  patient_registration_id= '165' and  office_id= '1' 
 Execution Time:0.0005650520324707

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='165' and  doctors_registration.office_id= '1' 
 Execution Time:0.00095510482788086

select count(*) as cnt from patient_registration where  patient_registration_id= '165' and  office_id= '1' 
 Execution Time:0.0005650520324707

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='165' and  doctors_registration.office_id= '1' 
 Execution Time:0.00095510482788086

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='165' and  office_id= '1' 
 Execution Time:0.00021600723266602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004727840423584

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004727840423584

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027894973754883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0047240257263184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.002892017364502

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0047240257263184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.002892017364502

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0024819374084473

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0047240257263184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.002892017364502

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0024819374084473

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 165 
 Execution Time:0.00060486793518066

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 216 
 Execution Time:0.00052380561828613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0022828578948975

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050783157348633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050783157348633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050783157348633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050783157348633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075197219848633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050783157348633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075197219848633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050783157348633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075197219848633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select count(*) as cnt from patient_registration where  patient_registration_id= '157' and  office_id= '1' 
 Execution Time:0.001007080078125

select count(*) as cnt from patient_registration where  patient_registration_id= '157' and  office_id= '1' 
 Execution Time:0.001007080078125

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='157' and  doctors_registration.office_id= '1' 
 Execution Time:0.0016651153564453

select count(*) as cnt from patient_registration where  patient_registration_id= '157' and  office_id= '1' 
 Execution Time:0.001007080078125

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='157' and  doctors_registration.office_id= '1' 
 Execution Time:0.0016651153564453

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='157' and  office_id= '1' 
 Execution Time:0.0015041828155518

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044107437133789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044107437133789

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029683113098145

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00052881240844727

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00052881240844727

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00019288063049316

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.000579833984375

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.000579833984375

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00077986717224121

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061392784118652

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061392784118652

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001431941986084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001431941986084

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001431941986084

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001431941986084

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044894218444824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001431941986084

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044894218444824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001431941986084

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044894218444824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001431941986084

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044894218444824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075912475585938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001431941986084

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044894218444824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075912475585938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001431941986084

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044894218444824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075912475585938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 157 
 Execution Time:0.00024795532226562

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 217 
 Execution Time:0.00018191337585449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015020370483398

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045084953308105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00086712837219238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00086712837219238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031876564025879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00086712837219238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031876564025879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00086712837219238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031876564025879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00086712837219238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031876564025879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00086712837219238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031876564025879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006721019744873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00086712837219238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031876564025879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006721019744873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00086712837219238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031876564025879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006721019744873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.001582145690918

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.001582145690918

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00028514862060547

select count(*) as cnt from patient_registration where  patient_registration_id= '149' and  office_id= '1' 
 Execution Time:0.00037407875061035

select count(*) as cnt from patient_registration where  patient_registration_id= '149' and  office_id= '1' 
 Execution Time:0.00037407875061035

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='149' and  doctors_registration.office_id= '1' 
 Execution Time:0.00046801567077637

select count(*) as cnt from patient_registration where  patient_registration_id= '149' and  office_id= '1' 
 Execution Time:0.00037407875061035

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='149' and  doctors_registration.office_id= '1' 
 Execution Time:0.00046801567077637

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='149' and  office_id= '1' 
 Execution Time:0.00017094612121582

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00062203407287598

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00062203407287598

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0010058879852295

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072598457336426

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072598457336426

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036096572875977

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00029206275939941

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00029206275939941

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0002439022064209

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0037369728088379

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0037369728088379

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0037910938262939

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0037369728088379

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0037910938262939

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 157 
 Execution Time:0.0032999515533447

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 217 
 Execution Time:0.0048179626464844

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 157 
 Execution Time:0.0027840137481689

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012741088867188

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0039160251617432

select * from examination where examination_id= '182' and   office_id= '1' 
 Execution Time:0.0065550804138184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002194881439209

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 182 
 Execution Time:0.010021924972534

select * from examination_chargesdetails where  examination_id= '182' 
 Execution Time:0.005634069442749

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0097520351409912

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0097520351409912

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014410018920898

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00061607360839844

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00061607360839844

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003359317779541

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0051279067993164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0051279067993164

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029759407043457

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029759407043457

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022110939025879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029759407043457

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022110939025879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038352012634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029759407043457

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022110939025879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038352012634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016520023345947

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029759407043457

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022110939025879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038352012634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016520023345947

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040509700775146

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029759407043457

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022110939025879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038352012634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016520023345947

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040509700775146

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029759407043457

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022110939025879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038352012634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016520023345947

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040509700775146

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031609535217285

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029759407043457

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022110939025879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038352012634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016520023345947

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040509700775146

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031609535217285

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025579929351807

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029759407043457

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022110939025879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038352012634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016520023345947

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040509700775146

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031609535217285

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025579929351807

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0039670467376709

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00056695938110352

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00056695938110352

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00024199485778809

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070405006408691

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070405006408691

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018160343170166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018160343170166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00370192527771

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018160343170166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00370192527771

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0023610591888428

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018160343170166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00370192527771

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0023610591888428

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040690898895264

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018160343170166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00370192527771

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0023610591888428

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040690898895264

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033071041107178

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018160343170166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00370192527771

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0023610591888428

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040690898895264

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033071041107178

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022549629211426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018160343170166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00370192527771

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0023610591888428

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040690898895264

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033071041107178

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022549629211426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018160343170166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00370192527771

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0023610591888428

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040690898895264

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033071041107178

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022549629211426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065207481384277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018160343170166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00370192527771

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0023610591888428

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040690898895264

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033071041107178

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022549629211426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065207481384277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018160343170166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00370192527771

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0023610591888428

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040690898895264

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033071041107178

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022549629211426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065207481384277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00054192543029785

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00054192543029785

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030207633972168

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 203 
 Execution Time:0.00024986267089844

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 218 
 Execution Time:0.00018095970153809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001528263092041

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0007328987121582

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036501884460449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036501884460449

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011520385742188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006108283996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006108283996582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006108283996582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00063490867614746

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00063490867614746

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00028896331787109

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044608116149902

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044608116149902

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0019299983978271

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022697448730469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022697448730469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013613700866699

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022697448730469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013613700866699

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057005882263184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022697448730469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013613700866699

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057005882263184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022697448730469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013613700866699

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057005882263184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036501884460449

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036501884460449

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037193298339844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052404403686523

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052404403686523

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037908554077148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039341449737549

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039341449737549

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039341449737549

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005040168762207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039341449737549

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005040168762207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039341449737549

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005040168762207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00096702575683594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039341449737549

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005040168762207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00096702575683594

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039341449737549

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005040168762207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00096702575683594

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0036189556121826

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0036189556121826

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0029160976409912

select count(*) as cnt from patient_registration where  patient_registration_id= '21' and  office_id= '1' 
 Execution Time:0.00041604042053223

select count(*) as cnt from patient_registration where  patient_registration_id= '21' and  office_id= '1' 
 Execution Time:0.00041604042053223

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='21' and  doctors_registration.office_id= '1' 
 Execution Time:0.00070905685424805

select count(*) as cnt from patient_registration where  patient_registration_id= '21' and  office_id= '1' 
 Execution Time:0.00041604042053223

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='21' and  doctors_registration.office_id= '1' 
 Execution Time:0.00070905685424805

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='21' and  office_id= '1' 
 Execution Time:0.0002751350402832

select count(*) as cnt from patient_registration where  patient_registration_id= '185' and  office_id= '1' 
 Execution Time:0.00046515464782715

select count(*) as cnt from patient_registration where  patient_registration_id= '185' and  office_id= '1' 
 Execution Time:0.00046515464782715

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='185' and  doctors_registration.office_id= '1' 
 Execution Time:0.00084900856018066

select count(*) as cnt from patient_registration where  patient_registration_id= '185' and  office_id= '1' 
 Execution Time:0.00046515464782715

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='185' and  doctors_registration.office_id= '1' 
 Execution Time:0.00084900856018066

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='185' and  office_id= '1' 
 Execution Time:0.00016093254089355

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0032820701599121

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0032820701599121

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037193298339844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 205 
 Execution Time:0.00027799606323242

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 220 
 Execution Time:0.00023603439331055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075078010559082

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075078010559082

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075078010559082

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 205 
 Execution Time:0.00053000450134277

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 220 
 Execution Time:0.00048398971557617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0007481575012207

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053095817565918

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053095817565918

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042104721069336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034689903259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034689903259277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034689903259277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018882751464844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034689903259277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018882751464844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055193901062012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034689903259277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018882751464844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055193901062012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034689903259277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018882751464844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055193901062012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00031590461730957

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00031590461730957

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00054788589477539

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037288665771484

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037288665771484

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00018405914306641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012009143829346

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012009143829346

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012009143829346

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012009143829346

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012009143829346

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014128684997559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012009143829346

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014128684997559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012009143829346

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014128684997559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012009143829346

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014128684997559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057888031005859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012009143829346

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014128684997559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057888031005859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012009143829346

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014128684997559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057888031005859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00019621849060059

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00082015991210938

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00082015991210938

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00032782554626465

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038504600524902

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038504600524902

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056695938110352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056695938110352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056695938110352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select count(*) as cnt from patient_registration where  patient_registration_id= '149' and  office_id= '1' 
 Execution Time:0.0015711784362793

select count(*) as cnt from patient_registration where  patient_registration_id= '149' and  office_id= '1' 
 Execution Time:0.0015711784362793

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='149' and  doctors_registration.office_id= '1' 
 Execution Time:0.0012280941009521

select count(*) as cnt from patient_registration where  patient_registration_id= '149' and  office_id= '1' 
 Execution Time:0.0015711784362793

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='149' and  doctors_registration.office_id= '1' 
 Execution Time:0.0012280941009521

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='149' and  office_id= '1' 
 Execution Time:0.00031208992004395

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00078988075256348

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00078988075256348

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024700164794922

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 206 
 Execution Time:0.00029611587524414

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 221 
 Execution Time:0.00021004676818848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 206 
 Execution Time:0.00037002563476562

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 221 
 Execution Time:0.00030612945556641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055098533630371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 207 
 Execution Time:0.00025010108947754

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 222 
 Execution Time:0.00018095970153809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015687942504883

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0008699893951416

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00075912475585938

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00075912475585938

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00023198127746582

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036215782165527

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036215782165527

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032186508178711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097799301147461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097799301147461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097799301147461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097799301147461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097799301147461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097799301147461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097799301147461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097799301147461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066804885864258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097799301147461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066804885864258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097799301147461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066804885864258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0038621425628662

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0038621425628662

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0023720264434814

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 208 
 Execution Time:0.00026106834411621

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 223 
 Execution Time:0.00021791458129883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017189979553223

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043201446533203

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069403648376465

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069403648376465

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033187866210938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015349388122559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015349388122559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015349388122559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047206878662109

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047206878662109

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00026488304138184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00080585479736328

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00080585479736328

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 203 
 Execution Time:0.00032997131347656

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 218 
 Execution Time:0.00025606155395508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0032610893249512

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0032610893249512

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0032610893249512

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 203 
 Execution Time:0.00023102760314941

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 218 
 Execution Time:0.00018501281738281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015091896057129

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00099086761474609

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034785270690918

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034785270690918

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00020194053649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038695335388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038695335388184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038695335388184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038695335388184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051593780517578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038695335388184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051593780517578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038695335388184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051593780517578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065517425537109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065517425537109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065517425537109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 209 
 Execution Time:0.0003209114074707

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 225 
 Execution Time:0.00023198127746582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001838207244873

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041294097900391

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00066900253295898

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00066900253295898

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034093856811523

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034720897674561

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034720897674561

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057888031005859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0054018497467041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0054018497467041

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0054018497467041

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0054018497467041

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0054018497467041

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0054018497467041

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0054018497467041

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056600570678711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0054018497467041

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056600570678711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0054018497467041

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056600570678711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029277801513672

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029277801513672

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00025796890258789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028491020202637

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028491020202637

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022792816162109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083613395690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083613395690918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083613395690918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0027029514312744

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083613395690918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0027029514312744

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083613395690918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0027029514312744

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001906156539917

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083613395690918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0027029514312744

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001906156539917

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083613395690918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0027029514312744

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001906156539917

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00099396705627441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083613395690918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0027029514312744

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001906156539917

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00099396705627441

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012869834899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083613395690918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0027029514312744

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001906156539917

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00099396705627441

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012869834899902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034120082855225

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083613395690918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0027029514312744

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001906156539917

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00099396705627441

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012869834899902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034120082855225

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 203 
 Execution Time:0.00045895576477051

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 218 
 Execution Time:0.00036191940307617

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 203 
 Execution Time:0.0011649131774902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0026929378509521

select * from examination where examination_id= '186' and   office_id= '1' 
 Execution Time:0.0011780261993408

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 186 
 Execution Time:0.00094294548034668

select * from examination_chargesdetails where  examination_id= '186' 
 Execution Time:0.00055885314941406

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0037901401519775

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0037901401519775

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0019490718841553

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='10' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.030188083648682

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='57' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0043811798095703

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007472038269043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007472038269043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007472038269043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007472038269043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007472038269043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067496299743652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007472038269043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067496299743652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007472038269043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067496299743652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007472038269043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067496299743652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010781288146973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007472038269043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067496299743652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010781288146973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001910924911499

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007472038269043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067496299743652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010781288146973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001910924911499

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='77' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0025279521942139

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='65' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00059103965759277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012490749359131

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012490749359131

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012490749359131

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 212 
 Execution Time:0.00032901763916016

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 229 
 Execution Time:0.00026488304138184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046205520629883

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037598609924316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037598609924316

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029397010803223

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00040102005004883

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00040102005004883

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029110908508301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037810802459717

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037810802459717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032808780670166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037810802459717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032808780670166

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038449764251709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037810802459717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032808780670166

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038449764251709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038518905639648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037810802459717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032808780670166

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038449764251709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038518905639648

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003849983215332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037810802459717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032808780670166

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038449764251709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038518905639648

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003849983215332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038299560546875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037810802459717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032808780670166

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038449764251709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038518905639648

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003849983215332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038299560546875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00382399559021

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037810802459717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032808780670166

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038449764251709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038518905639648

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003849983215332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038299560546875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00382399559021

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0058341026306152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037810802459717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032808780670166

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038449764251709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038518905639648

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003849983215332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038299560546875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00382399559021

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0058341026306152

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0089571475982666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037810802459717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032808780670166

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038449764251709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038518905639648

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003849983215332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038299560546875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00382399559021

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0058341026306152

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0089571475982666

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0044939517974854

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 205 
 Execution Time:0.00026416778564453

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 220 
 Execution Time:0.00021195411682129

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 205 
 Execution Time:0.00062298774719238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075602531433105

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075602531433105

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047397613525391

select * from examination where examination_id= '183' and   office_id= '1' 
 Execution Time:0.00085997581481934

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 183 
 Execution Time:0.00029706954956055

select * from examination_chargesdetails where  examination_id= '183' 
 Execution Time:0.00023412704467773

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056815147399902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015511512756348

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015511512756348

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015511512756348

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 185 
 Execution Time:0.00095796585083008

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 224 
 Execution Time:0.0012369155883789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040912628173828

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0013570785522461

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='11' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00084114074707031

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0072870254516602

SELECT *
FROM `examination`
WHERE `examination_id` = 167 
 Execution Time:0.0015549659729004

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.0013329982757568

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.0041258335113525

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 185 
 Execution Time:0.0038762092590332

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.0012819766998291

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=167 
 Execution Time:0.0028688907623291

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=167 
 Execution Time:0.0011281967163086

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=167 
 Execution Time:0.00045490264892578

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=167 
 Execution Time:0.00382399559021

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='167' and office_id='1' 
 Execution Time:0.00072598457336426

select * from examination_chargesdetails where  examination_id= '167' 
 Execution Time:0.00049281120300293

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 185 
 Execution Time:0.00024604797363281

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 196 
 Execution Time:0.00018000602722168

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 185 
 Execution Time:0.00059390068054199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select * from examination where examination_id= '167' and   office_id= '1' 
 Execution Time:0.00063180923461914

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 167 
 Execution Time:0.00047087669372559

select * from examination_chargesdetails where  examination_id= '167' 
 Execution Time:0.00035500526428223

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00096702575683594

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00096702575683594

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047206878662109

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00054311752319336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 211 
 Execution Time:0.00027084350585938

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 227 
 Execution Time:0.0002138614654541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040602684020996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 209 
 Execution Time:0.00058889389038086

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 225 
 Execution Time:0.00034594535827637

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 209 
 Execution Time:0.00090599060058594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select * from examination where examination_id= '188' and   office_id= '1' 
 Execution Time:0.003493070602417

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001276969909668

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 188 
 Execution Time:0.0035309791564941

select * from examination_chargesdetails where  examination_id= '188' 
 Execution Time:0.0046639442443848

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047898292541504

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00072288513183594

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00072288513183594

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055313110351562

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='45' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00088715553283691

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='77' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00072002410888672

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='19' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00079703330993652

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0017430782318115

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0017430782318115

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0017430782318115

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 205 
 Execution Time:0.00026917457580566

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 220 
 Execution Time:0.00018405914306641

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 205 
 Execution Time:0.00050091743469238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015091896057129

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052499771118164

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052499771118164

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0020718574523926

select * from examination where examination_id= '183' and   office_id= '1' 
 Execution Time:0.0048751831054688

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0039770603179932

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 183 
 Execution Time:0.0039169788360596

select * from examination_chargesdetails where  examination_id= '183' 
 Execution Time:0.00058102607727051

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058603286743164

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00048303604125977

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00048303604125977

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037407875061035

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062394142150879

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062394142150879

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003201961517334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052189826965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052189826965332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052189826965332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0032551288604736

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0032551288604736

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00090599060058594

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005190372467041

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005190372467041

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055739879608154

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055739879608154

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055739879608154

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015630722045898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055739879608154

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015630722045898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013048648834229

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055739879608154

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015630722045898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013048648834229

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021078586578369

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055739879608154

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015630722045898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013048648834229

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021078586578369

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082015991210938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055739879608154

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015630722045898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013048648834229

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021078586578369

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082015991210938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010600090026855

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055739879608154

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015630722045898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013048648834229

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021078586578369

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082015991210938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010600090026855

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011439323425293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055739879608154

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015630722045898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013048648834229

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021078586578369

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082015991210938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010600090026855

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011439323425293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016770362854004

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055739879608154

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015630722045898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013048648834229

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021078586578369

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082015991210938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010600090026855

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011439323425293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016770362854004

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0007021427154541

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0007021427154541

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00027799606323242

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 204 
 Execution Time:0.00019598007202148

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 219 
 Execution Time:0.00016188621520996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012803077697754

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00061321258544922

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 212 
 Execution Time:0.00031495094299316

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 229 
 Execution Time:0.00023698806762695

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 212 
 Execution Time:0.00083017349243164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064492225646973

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064492225646973

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037193298339844

select * from examination where examination_id= '189' and   office_id= '1' 
 Execution Time:0.0011448860168457

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 189 
 Execution Time:0.0003511905670166

select * from examination_chargesdetails where  examination_id= '189' 
 Execution Time:0.00042295455932617

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058507919311523

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='39' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0083808898925781

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044918060302734

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044918060302734

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029182434082031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057601928710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057601928710938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057601928710938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 213 
 Execution Time:0.00035881996154785

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 230 
 Execution Time:0.00022292137145996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 213 
 Execution Time:0.00030088424682617

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 230 
 Execution Time:0.00036096572875977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063300132751465

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00070810317993164

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='43' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00079011917114258

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='63' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00079679489135742

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='9' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00067496299743652

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018730163574219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018730163574219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018730163574219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 204 
 Execution Time:0.00031900405883789

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 219 
 Execution Time:0.0010571479797363

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 204 
 Execution Time:0.00092291831970215

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012691020965576

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059199333190918

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059199333190918

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044798851013184

select * from examination where examination_id= '191' and   office_id= '1' 
 Execution Time:0.0012919902801514

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 191 
 Execution Time:0.00030016899108887

select * from examination_chargesdetails where  examination_id= '191' 
 Execution Time:0.00025701522827148

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063705444335938

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00028491020202637

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00028491020202637

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00021910667419434

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='10' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0008540153503418

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='57' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00057601928710938

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='65' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.001121997833252

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043392181396484

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043392181396484

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010330677032471

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010330677032471

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010330677032471

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='19' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00050115585327148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00097513198852539

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00097513198852539

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00097513198852539

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 207 
 Execution Time:0.00039982795715332

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 222 
 Execution Time:0.00031208992004395

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 207 
 Execution Time:0.00055313110351562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001528263092041

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030016899108887

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040912628173828

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040912628173828

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00029706954956055

select * from examination where examination_id= '185' and   office_id= '1' 
 Execution Time:0.00060105323791504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 185 
 Execution Time:0.00044798851013184

select * from examination_chargesdetails where  examination_id= '185' 
 Execution Time:0.0014729499816895

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00056791305541992

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='81' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00061392784118652

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00085592269897461

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00085592269897461

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0027468204498291

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010099411010742

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010099411010742

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00189208984375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018839836120605

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0030550956726074

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018839836120605

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0030550956726074

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018839836120605

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0030550956726074

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 216 
 Execution Time:0.0015578269958496

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 233 
 Execution Time:0.0056169033050537

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037200450897217

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018939971923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018939971923828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020401477813721

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018939971923828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020401477813721

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019218921661377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018939971923828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020401477813721

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019218921661377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012969970703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018939971923828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020401477813721

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019218921661377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012969970703125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007021427154541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018939971923828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020401477813721

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019218921661377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012969970703125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007021427154541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018939971923828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020401477813721

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019218921661377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012969970703125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007021427154541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018939971923828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020401477813721

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019218921661377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012969970703125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007021427154541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089907646179199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018939971923828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020401477813721

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019218921661377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012969970703125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007021427154541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089907646179199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018939971923828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020401477813721

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019218921661377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012969970703125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007021427154541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089907646179199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0016388893127441

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0016388893127441

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0018191337585449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0016388893127441

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0018191337585449

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 204 
 Execution Time:0.0012791156768799

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 219 
 Execution Time:0.0037460327148438

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 204 
 Execution Time:0.0030829906463623

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037188529968262

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066804885864258

select * from examination where examination_id= '191' and   office_id= '1' 
 Execution Time:0.00071907043457031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 191 
 Execution Time:0.00054812431335449

select * from examination_chargesdetails where  examination_id= '191' 
 Execution Time:0.00049209594726562

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00084710121154785

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00084710121154785

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037384033203125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 207 
 Execution Time:0.00035905838012695

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 222 
 Execution Time:0.00026392936706543

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 207 
 Execution Time:0.00071501731872559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059890747070312

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059890747070312

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035691261291504

select * from examination where examination_id= '185' and   office_id= '1' 
 Execution Time:0.0013830661773682

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 185 
 Execution Time:0.00032591819763184

select * from examination_chargesdetails where  examination_id= '185' 
 Execution Time:0.00025200843811035

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0035479068756104

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 220 
 Execution Time:0.00039482116699219

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 237 
 Execution Time:0.00057315826416016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067710876464844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0015168190002441

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0015168190002441

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0032949447631836

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0015168190002441

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0032949447631836

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 206 
 Execution Time:0.00040912628173828

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 221 
 Execution Time:0.00027108192443848

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 206 
 Execution Time:0.00051307678222656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070309638977051

select * from examination where examination_id= '184' and   office_id= '1' 
 Execution Time:0.0010759830474854

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083184242248535

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 184 
 Execution Time:0.0003669261932373

select * from examination_chargesdetails where  examination_id= '184' 
 Execution Time:0.00064206123352051

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00092196464538574

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00092196464538574

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0086820125579834

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='81' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0016500949859619

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00089812278747559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 211 
 Execution Time:0.00029897689819336

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 227 
 Execution Time:0.00020503997802734

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 211 
 Execution Time:0.00073599815368652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select * from examination where examination_id= '190' and   office_id= '1' 
 Execution Time:0.0011880397796631

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 190 
 Execution Time:0.00036191940307617

select * from examination_chargesdetails where  examination_id= '190' 
 Execution Time:0.00034403800964355

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00071191787719727

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00071191787719727

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048518180847168

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077509880065918

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00073504447937012

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='11' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00044608116149902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084519386291504

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084519386291504

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084519386291504

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 218 
 Execution Time:0.00041484832763672

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 235 
 Execution Time:0.00076413154602051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00029993057250977

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00071477890014648

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00071477890014648

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00020003318786621

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00087594985961914

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00087594985961914

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038599967956543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 217 
 Execution Time:0.00053906440734863

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 234 
 Execution Time:0.00053501129150391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0020170211791992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0020170211791992

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0020170211791992

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 217 
 Execution Time:0.0045108795166016

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 234 
 Execution Time:0.0028760433197021

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029728412628174

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0039858818054199

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026822090148926

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026822090148926

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 219 
 Execution Time:0.00026988983154297

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 236 
 Execution Time:0.0001678466796875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014781951904297

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055909156799316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024819374084473

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024819374084473

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024819374084473

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 220 
 Execution Time:0.00029087066650391

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 237 
 Execution Time:0.00017499923706055

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 220 
 Execution Time:0.00047898292541504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select * from examination where examination_id= '193' and   office_id= '1' 
 Execution Time:0.00070905685424805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 193 
 Execution Time:0.00026106834411621

select * from examination_chargesdetails where  examination_id= '193' 
 Execution Time:0.00036501884460449

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00089788436889648

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00090217590332031

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00090217590332031

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005950927734375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005950927734375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005950927734375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='16' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010750293731689

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00046014785766602

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='77' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00075984001159668

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 222 
 Execution Time:0.00030922889709473

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 239 
 Execution Time:0.0001988410949707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00029110908508301

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0029630661010742

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0029630661010742

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0029630661010742

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 222 
 Execution Time:0.00035691261291504

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 239 
 Execution Time:0.00023698806762695

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 222 
 Execution Time:0.00057005882263184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018215179443359

select * from examination where examination_id= '197' and   office_id= '1' 
 Execution Time:0.0007011890411377

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 197 
 Execution Time:0.00014495849609375

select * from examination_chargesdetails where  examination_id= '197' 
 Execution Time:0.00011706352233887

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050687789916992

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050687789916992

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056791305541992

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='39' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00070500373840332

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='19' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00073504447937012

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='65' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00091385841369629

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 218 
 Execution Time:0.00041294097900391

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 235 
 Execution Time:0.00026583671569824

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 218 
 Execution Time:0.00096607208251953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select * from examination where examination_id= '194' and   office_id= '1' 
 Execution Time:0.0008540153503418

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 194 
 Execution Time:0.00048303604125977

select * from examination_chargesdetails where  examination_id= '194' 
 Execution Time:0.00029110908508301

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00039815902709961

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0009300708770752

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0009300708770752

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048279762268066

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='33' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00089716911315918

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='28' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00042295455932617

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='18' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00068092346191406

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='65' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00054001808166504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 223 
 Execution Time:0.00040698051452637

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 240 
 Execution Time:0.00034499168395996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005347728729248

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 221 
 Execution Time:0.00031590461730957

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 238 
 Execution Time:0.0002748966217041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 221 
 Execution Time:0.0002901554107666

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 238 
 Execution Time:0.00025296211242676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067806243896484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 219 
 Execution Time:0.00029587745666504

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 236 
 Execution Time:0.00018501281738281

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 219 
 Execution Time:0.0007469654083252

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015115737915039

select * from examination where examination_id= '195' and   office_id= '1' 
 Execution Time:0.00090789794921875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 195 
 Execution Time:0.00050806999206543

select * from examination_chargesdetails where  examination_id= '195' 
 Execution Time:0.00026297569274902

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061511993408203

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061511993408203

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0002748966217041

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044798851013184

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='54' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00080013275146484

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00045895576477051

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='81' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00067901611328125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033378601074219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033378601074219

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 215 
 Execution Time:0.00024986267089844

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 232 
 Execution Time:0.00099778175354004

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057291984558105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084805488586426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084805488586426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084805488586426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 216 
 Execution Time:0.00057291984558105

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 233 
 Execution Time:0.0005800724029541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066184997558594

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066184997558594

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066184997558594

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 216 
 Execution Time:0.00033807754516602

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 233 
 Execution Time:0.00046300888061523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050902366638184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015780925750732

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015780925750732

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015780925750732

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 208 
 Execution Time:0.00033688545227051

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 223 
 Execution Time:0.00029206275939941

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 208 
 Execution Time:0.00087904930114746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054478645324707

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067400932312012

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0044620037078857

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0044620037078857

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0032989978790283

select * from examination where examination_id= '187' and   office_id= '1' 
 Execution Time:0.00088000297546387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 187 
 Execution Time:0.00029993057250977

select * from examination_chargesdetails where  examination_id= '187' 
 Execution Time:0.00022292137145996

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00077605247497559

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='11' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00087690353393555

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 210 
 Execution Time:0.00025796890258789

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 226 
 Execution Time:0.00016188621520996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006711483001709

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 210 
 Execution Time:0.0003349781036377

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 226 
 Execution Time:0.00023484230041504

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 210 
 Execution Time:0.00059700012207031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00077295303344727

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00077295303344727

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00084400177001953

select * from examination where examination_id= '202' and   office_id= '1' 
 Execution Time:0.0012450218200684

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 202 
 Execution Time:0.00048494338989258

select * from examination_chargesdetails where  examination_id= '202' 
 Execution Time:0.0008690357208252

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065183639526367

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 210 
 Execution Time:0.00037693977355957

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 226 
 Execution Time:0.00020980834960938

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 210 
 Execution Time:0.00058698654174805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select * from examination where examination_id= '202' and   office_id= '1' 
 Execution Time:0.00093293190002441

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 202 
 Execution Time:0.00085616111755371

select * from examination_chargesdetails where  examination_id= '202' 
 Execution Time:0.0002598762512207

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032305717468262

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032305717468262

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00028896331787109

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058698654174805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 149 
 Execution Time:0.00024986267089844

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 228 
 Execution Time:0.00020313262939453

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006868839263916

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='11' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010590553283691

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00096917152404785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 215 
 Execution Time:0.00043702125549316

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 232 
 Execution Time:0.00047206878662109

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 215 
 Execution Time:0.00098419189453125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select * from examination where examination_id= '200' and   office_id= '1' 
 Execution Time:0.00068497657775879

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 200 
 Execution Time:0.00016117095947266

select * from examination_chargesdetails where  examination_id= '200' 
 Execution Time:0.00011110305786133

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00072097778320312

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00072097778320312

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077509880065918

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='77' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00046205520629883

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='11' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00066280364990234

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013041496276855

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013041496276855

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0011022090911865

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013041496276855

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0011022090911865

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0024340152740479

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011188983917236

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011188983917236

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011188983917236

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011188983917236

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011188983917236

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011188983917236

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011188983917236

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011799335479736

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011188983917236

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011799335479736

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011188983917236

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011799335479736

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0014100074768066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0014100074768066

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0014100074768066

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 210 
 Execution Time:0.00029182434082031

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 226 
 Execution Time:0.00024795532226562

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 210 
 Execution Time:0.00076103210449219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select * from examination where examination_id= '202' and   office_id= '1' 
 Execution Time:0.00067687034606934

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 202 
 Execution Time:0.00036096572875977

select * from examination_chargesdetails where  examination_id= '202' 
 Execution Time:0.00029802322387695

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00075697898864746

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00084185600280762

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00084185600280762

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040388107299805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00067520141601562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00067520141601562

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00067520141601562

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 216 
 Execution Time:0.00029778480529785

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 233 
 Execution Time:0.00028896331787109

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 216 
 Execution Time:0.00060701370239258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00077104568481445

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00077104568481445

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00023388862609863

select * from examination where examination_id= '201' and   office_id= '1' 
 Execution Time:0.00078988075256348

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 201 
 Execution Time:0.00045895576477051

select * from examination_chargesdetails where  examination_id= '201' 
 Execution Time:0.00035691261291504

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070405006408691

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='18' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00064301490783691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 223 
 Execution Time:0.00032496452331543

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 240 
 Execution Time:0.00021100044250488

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 223 
 Execution Time:0.00049901008605957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013017654418945

select * from examination where examination_id= '198' and   office_id= '1' 
 Execution Time:0.00063705444335938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 198 
 Execution Time:0.00014710426330566

select * from examination_chargesdetails where  examination_id= '198' 
 Execution Time:0.00016593933105469

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051283836364746

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049686431884766

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049686431884766

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00029587745666504

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00073385238647461

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='65' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00063896179199219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 215 
 Execution Time:0.00024294853210449

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 232 
 Execution Time:0.00026392936706543

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 215 
 Execution Time:0.00051188468933105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select * from examination where examination_id= '200' and   office_id= '1' 
 Execution Time:0.00068497657775879

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 200 
 Execution Time:0.00019097328186035

select * from examination_chargesdetails where  examination_id= '200' 
 Execution Time:0.00014400482177734

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068092346191406

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00072979927062988

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00072979927062988

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044608116149902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010640621185303

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010640621185303

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010640621185303

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 221 
 Execution Time:0.00043988227844238

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 238 
 Execution Time:0.00044083595275879

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 221 
 Execution Time:0.00089693069458008

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select * from examination where examination_id= '199' and   office_id= '1' 
 Execution Time:0.0010840892791748

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 199 
 Execution Time:0.0005950927734375

select * from examination_chargesdetails where  examination_id= '199' 
 Execution Time:0.00038886070251465

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00076413154602051

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00076413154602051

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046801567077637

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00081396102905273

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0008540153503418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002202033996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002202033996582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018751621246338

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002202033996582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018751621246338

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011820793151855

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002202033996582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018751621246338

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011820793151855

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002202033996582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018751621246338

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011820793151855

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015261173248291

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002202033996582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018751621246338

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011820793151855

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015261173248291

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022068023681641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002202033996582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018751621246338

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011820793151855

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015261173248291

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022068023681641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002202033996582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018751621246338

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011820793151855

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015261173248291

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022068023681641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015408992767334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002202033996582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018751621246338

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011820793151855

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015261173248291

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022068023681641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015408992767334

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002202033996582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018751621246338

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011820793151855

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012340545654297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015261173248291

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022068023681641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015408992767334

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0036289691925049

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0036289691925049

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00036287307739258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058102607727051

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058102607727051

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036716461181641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015497207641602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015497207641602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015497207641602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015497207641602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039291381835938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015497207641602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039291381835938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015497207641602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039291381835938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.02853798866272

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0015909671783447

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.02853798866272

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0015909671783447

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0017850399017334

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.02853798866272

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0015909671783447

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0017850399017334

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 224 
 Execution Time:0.00040698051452637

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 241 
 Execution Time:0.00027084350585938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010769367218018

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010769367218018

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010769367218018

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 224 
 Execution Time:0.00094699859619141

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 241 
 Execution Time:0.0005190372467041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0031769275665283

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0047941207885742

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0047941207885742

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0014011859893799

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00060701370239258

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00060701370239258

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00042605400085449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0008080005645752

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0008080005645752

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041890144348145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013208389282227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013208389282227

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00571608543396

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013208389282227

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00571608543396

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002830982208252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013208389282227

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00571608543396

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002830982208252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038268566131592

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013208389282227

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00571608543396

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002830982208252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038268566131592

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028738975524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013208389282227

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00571608543396

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002830982208252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038268566131592

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028738975524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028281211853027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013208389282227

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00571608543396

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002830982208252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038268566131592

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028738975524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028281211853027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015280246734619

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013208389282227

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00571608543396

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002830982208252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038268566131592

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028738975524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028281211853027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015280246734619

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0040390491485596

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013208389282227

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00571608543396

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002830982208252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038268566131592

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028738975524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028281211853027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015280246734619

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0040390491485596

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014979839324951

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013208389282227

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00571608543396

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002830982208252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038268566131592

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028738975524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028281211853027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015280246734619

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0040390491485596

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014979839324951

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00096702575683594

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0033719539642334

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0033719539642334

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0039381980895996

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032200813293457

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032200813293457

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0029120445251465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015449523925781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015449523925781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088405609130859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015449523925781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088405609130859

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00094413757324219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015449523925781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088405609130859

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00094413757324219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015449523925781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088405609130859

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00094413757324219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015449523925781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088405609130859

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00094413757324219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015449523925781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088405609130859

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00094413757324219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015449523925781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088405609130859

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00094413757324219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065994262695312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015449523925781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088405609130859

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00094413757324219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065994262695312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015449523925781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088405609130859

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00094413757324219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065994262695312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011739730834961

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0014379024505615

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011739730834961

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0014379024505615

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0015749931335449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011739730834961

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0014379024505615

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0015749931335449

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 225 
 Execution Time:0.0040900707244873

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 242 
 Execution Time:0.00099086761474609

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0044159889221191

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0066919326782227

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 226 
 Execution Time:0.00038409233093262

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 243 
 Execution Time:0.00037693977355957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029778480529785

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00080513954162598

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00056195259094238

SELECT *
FROM `examination`
WHERE `examination_id` = 204 
 Execution Time:0.0050990581512451

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00037908554077148

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00035691261291504

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 224 
 Execution Time:0.00028181076049805

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00048995018005371

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=204 
 Execution Time:0.00098609924316406

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=204 
 Execution Time:0.0010161399841309

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=204 
 Execution Time:0.00045585632324219

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=204 
 Execution Time:0.015989065170288

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='204' and office_id='1' 
 Execution Time:0.0038230419158936

select * from examination_chargesdetails where  examination_id= '204' 
 Execution Time:0.017918109893799

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 224 
 Execution Time:0.00024604797363281

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 241 
 Execution Time:0.00073885917663574

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 224 
 Execution Time:0.0006859302520752

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0038321018218994

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0038321018218994

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053787231445312

select * from examination where examination_id= '204' and   office_id= '1' 
 Execution Time:0.00093889236450195

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0008549690246582

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 204 
 Execution Time:0.00028109550476074

select * from examination_chargesdetails where  examination_id= '204' 
 Execution Time:0.00022792816162109

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00078201293945312

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0008242130279541

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0008242130279541

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0008242130279541

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 224 
 Execution Time:0.00050997734069824

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 241 
 Execution Time:0.0004432201385498

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 224 
 Execution Time:0.0012500286102295

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034430027008057

select * from examination where examination_id= '204' and   office_id= '1' 
 Execution Time:0.0010569095611572

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0020961761474609

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 204 
 Execution Time:0.0017509460449219

select * from examination_chargesdetails where  examination_id= '204' 
 Execution Time:0.00059294700622559

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057506561279297

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057506561279297

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041794776916504

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0024569034576416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075578689575195

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075578689575195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011119842529297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075578689575195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011119842529297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010440349578857

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075578689575195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011119842529297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010440349578857

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010480880737305

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075578689575195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011119842529297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010440349578857

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010480880737305

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091791152954102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075578689575195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011119842529297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010440349578857

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010480880737305

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091791152954102

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075578689575195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011119842529297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010440349578857

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010480880737305

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091791152954102

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075578689575195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011119842529297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010440349578857

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010480880737305

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091791152954102

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012798309326172

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075578689575195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011119842529297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010440349578857

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010480880737305

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091791152954102

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012798309326172

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075578689575195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011119842529297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010440349578857

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010480880737305

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091791152954102

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012798309326172

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016269683837891

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012378692626953

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016269683837891

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012378692626953

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00093793869018555

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016269683837891

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012378692626953

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00093793869018555

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 165 
 Execution Time:0.00028300285339355

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 216 
 Execution Time:0.00031089782714844

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 165 
 Execution Time:0.00064182281494141

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select * from examination where examination_id= '181' and   office_id= '1' 
 Execution Time:0.00086784362792969

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 181 
 Execution Time:0.0011329650878906

select * from examination_chargesdetails where  examination_id= '181' 
 Execution Time:0.0010159015655518

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0017750263214111

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0017750263214111

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054693222045898

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0013368129730225

SELECT *
FROM `examination`
WHERE `examination_id` = 147 
 Execution Time:0.00062298774719238

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00027084350585938

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00032806396484375

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 165 
 Execution Time:0.00022602081298828

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 3 
 Execution Time:0.0012249946594238

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=147 
 Execution Time:0.0005650520324707

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=147 
 Execution Time:0.00046992301940918

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=147 
 Execution Time:0.00034189224243164

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=147 
 Execution Time:0.00024819374084473

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='147' and office_id='1' 
 Execution Time:0.00049591064453125

select * from examination_chargesdetails where  examination_id= '147' 
 Execution Time:0.00020098686218262

SELECT *
FROM `examination`
WHERE `examination_id` = 181 
 Execution Time:0.00051403045654297

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.0005040168762207

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00015592575073242

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 165 
 Execution Time:0.00029492378234863

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 3 
 Execution Time:0.00023484230041504

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=181 
 Execution Time:0.00052094459533691

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=181 
 Execution Time:0.00036501884460449

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=181 
 Execution Time:0.00031208992004395

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=181 
 Execution Time:0.0001518726348877

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='181' and office_id='1' 
 Execution Time:0.00047206878662109

select * from examination_chargesdetails where  examination_id= '181' 
 Execution Time:0.00012397766113281


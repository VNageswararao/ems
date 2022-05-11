select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048410892486572

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048410892486572

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024170875549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048410892486572

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024170875549316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0060989856719971

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048410892486572

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024170875549316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0060989856719971

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0062930583953857

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048410892486572

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024170875549316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0060989856719971

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0062930583953857

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033679008483887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048410892486572

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024170875549316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0060989856719971

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0062930583953857

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033679008483887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048410892486572

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024170875549316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0060989856719971

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0062930583953857

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033679008483887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.005972146987915

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048410892486572

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024170875549316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0060989856719971

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0062930583953857

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033679008483887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.005972146987915

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032989978790283

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012929439544678

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012929439544678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012929439544678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037341117858887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012929439544678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037341117858887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022659301757812

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012929439544678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037341117858887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022659301757812

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013949871063232

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012929439544678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037341117858887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022659301757812

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013949871063232

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012929439544678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037341117858887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022659301757812

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013949871063232

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084090232849121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012929439544678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037341117858887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022659301757812

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013949871063232

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084090232849121

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035450458526611

select count(*) as cnt from patient_registration where  patient_registration_id= '1004' and  office_id= '1' 
 Execution Time:0.00059008598327637

select count(*) as cnt from patient_registration where  patient_registration_id= '1004' and  office_id= '1' 
 Execution Time:0.00059008598327637

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1004' and  doctors_registration.office_id= '1' 
 Execution Time:0.0023038387298584

select count(*) as cnt from patient_registration where  patient_registration_id= '1004' and  office_id= '1' 
 Execution Time:0.00059008598327637

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1004' and  doctors_registration.office_id= '1' 
 Execution Time:0.0023038387298584

select fname,lname,mrdno from patient_registration where  patient_registration_id='1004' and  office_id= '1' 
 Execution Time:0.00035810470581055

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00050783157348633

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00050783157348633

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00036215782165527

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0030930042266846

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0030930042266846

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053215026855469

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064706802368164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064706802368164

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087690353393555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087690353393555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087690353393555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087690353393555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029683113098145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087690353393555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029683113098145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087690353393555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029683113098145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087690353393555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029683113098145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047588348388672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087690353393555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029683113098145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047588348388672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021810531616211

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039410591125488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039410591125488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039410591125488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039410591125488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053501129150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039410591125488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053501129150391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022220611572266

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00062084197998047

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00062084197998047

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00099706649780273

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060606002807617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060606002807617

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002901554107666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004432201385498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004432201385498

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004432201385498

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039410591125488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004432201385498

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039410591125488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004432201385498

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039410591125488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004432201385498

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039410591125488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056910514831543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004432201385498

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039410591125488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056910514831543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025210380554199

select count(*) as cnt from patient_registration where  patient_registration_id= '250' and  office_id= '1' 
 Execution Time:0.00034999847412109

select count(*) as cnt from patient_registration where  patient_registration_id= '250' and  office_id= '1' 
 Execution Time:0.00034999847412109

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='250' and  doctors_registration.office_id= '1' 
 Execution Time:0.0011310577392578

select count(*) as cnt from patient_registration where  patient_registration_id= '250' and  office_id= '1' 
 Execution Time:0.00034999847412109

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='250' and  doctors_registration.office_id= '1' 
 Execution Time:0.0011310577392578

select fname,lname,mrdno from patient_registration where  patient_registration_id='250' and  office_id= '1' 
 Execution Time:0.00019407272338867

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040698051452637

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040698051452637

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031900405883789

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00081896781921387

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00081896781921387

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0017199516296387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037693977355957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037693977355957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037693977355957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048589706420898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037693977355957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048589706420898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019729137420654

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065898895263672

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065898895263672

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037884712219238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042610168457031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042610168457031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022552013397217

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042610168457031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022552013397217

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028080940246582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042610168457031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022552013397217

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028080940246582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017619132995605

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042610168457031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022552013397217

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028080940246582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017619132995605

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0045289993286133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042610168457031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022552013397217

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028080940246582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017619132995605

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0045289993286133

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032079219818115

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010690689086914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010690689086914

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010690689086914

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010690689086914

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010690689086914

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047683715820312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010690689086914

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047683715820312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022220611572266

select count(*) as cnt from patient_registration where  patient_registration_id= '789' and  office_id= '1' 
 Execution Time:0.0044510364532471

select count(*) as cnt from patient_registration where  patient_registration_id= '789' and  office_id= '1' 
 Execution Time:0.0044510364532471

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='789' and  doctors_registration.office_id= '1' 
 Execution Time:0.0035409927368164

select count(*) as cnt from patient_registration where  patient_registration_id= '789' and  office_id= '1' 
 Execution Time:0.0044510364532471

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='789' and  doctors_registration.office_id= '1' 
 Execution Time:0.0035409927368164

select fname,lname,mrdno from patient_registration where  patient_registration_id='789' and  office_id= '1' 
 Execution Time:0.0013339519500732

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00082111358642578

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00082111358642578

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0023632049560547

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00079107284545898

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00079107284545898

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00088882446289062

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005948543548584

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005948543548584

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032615661621094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047802925109863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047802925109863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047802925109863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070905685424805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047802925109863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070905685424805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022690296173096

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025999546051025

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025999546051025

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025999546051025

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029220581054688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025999546051025

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029220581054688

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025999546051025

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029220581054688

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0020749568939209

select count(*) as cnt from patient_registration where  patient_registration_id= '1095' and  office_id= '1' 
 Execution Time:0.00036287307739258

select count(*) as cnt from patient_registration where  patient_registration_id= '1095' and  office_id= '1' 
 Execution Time:0.00036287307739258

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1095' and  doctors_registration.office_id= '1' 
 Execution Time:0.001276969909668

select count(*) as cnt from patient_registration where  patient_registration_id= '1095' and  office_id= '1' 
 Execution Time:0.00036287307739258

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1095' and  doctors_registration.office_id= '1' 
 Execution Time:0.001276969909668

select fname,lname,mrdno from patient_registration where  patient_registration_id='1095' and  office_id= '1' 
 Execution Time:0.00018692016601562

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0038819313049316

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0038819313049316

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00062990188598633

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00072479248046875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024569034576416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024569034576416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024569034576416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024569034576416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024569034576416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037693977355957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037693977355957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037693977355957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048112869262695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037693977355957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048112869262695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024540424346924

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0011389255523682

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0011389255523682

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0032908916473389

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0025551319122314

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0025551319122314

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0017669200897217

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040309429168701

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040309429168701

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0139479637146

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040309429168701

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0139479637146

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010910034179688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040309429168701

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0139479637146

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010910034179688

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036602020263672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040309429168701

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0139479637146

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010910034179688

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036602020263672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040309429168701

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0139479637146

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010910034179688

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036602020263672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0022618770599365

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040309429168701

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0139479637146

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010910034179688

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036602020263672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0022618770599365

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041978359222412

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040309429168701

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0139479637146

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010910034179688

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036602020263672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0022618770599365

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041978359222412

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046539306640625

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.001007080078125

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.001007080078125

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00061893463134766

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050806999206543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050806999206543

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033321380615234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033321380615234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039610862731934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033321380615234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039610862731934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037899017333984

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033321380615234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039610862731934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037899017333984

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038189888000488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033321380615234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039610862731934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037899017333984

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038189888000488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038039684295654

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033321380615234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039610862731934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037899017333984

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038189888000488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038039684295654

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037961006164551

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033321380615234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039610862731934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037899017333984

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038189888000488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038039684295654

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037961006164551

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037620067596436

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033321380615234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039610862731934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037899017333984

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038189888000488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038039684295654

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037961006164551

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037620067596436

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039429664611816

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00043416023254395

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00043416023254395

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0002739429473877

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070595741271973

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070595741271973

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060820579528809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060820579528809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060820579528809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060820579528809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029587745666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060820579528809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029587745666504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060820579528809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029587745666504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060820579528809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029587745666504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076913833618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060820579528809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029587745666504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076913833618164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021779537200928

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00043201446533203

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00043201446533203

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026798248291016

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044894218444824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044894218444824

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040006637573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031304359436035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031304359436035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031304359436035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005190372467041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031304359436035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005190372467041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002183198928833

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049304962158203

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049304962158203

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037097930908203

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062680244445801

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062680244445801

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011169910430908

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029683113098145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029683113098145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029683113098145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029683113098145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053000450134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029683113098145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053000450134277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025551319122314

select count(*) as cnt from patient_registration where  patient_registration_id= '1008' and  office_id= '1' 
 Execution Time:0.0038878917694092

select count(*) as cnt from patient_registration where  patient_registration_id= '1008' and  office_id= '1' 
 Execution Time:0.0038878917694092

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1008' and  doctors_registration.office_id= '1' 
 Execution Time:0.0058619976043701

select count(*) as cnt from patient_registration where  patient_registration_id= '1008' and  office_id= '1' 
 Execution Time:0.0038878917694092

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1008' and  doctors_registration.office_id= '1' 
 Execution Time:0.0058619976043701

select fname,lname,mrdno from patient_registration where  patient_registration_id='1008' and  office_id= '1' 
 Execution Time:0.0031669139862061

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0028059482574463

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0028059482574463

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00051403045654297

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034284591674805

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034284591674805

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033307075500488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037097930908203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016448497772217

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051188468933105

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051188468933105

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060892105102539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010790824890137

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010790824890137

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003511905670166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010790824890137

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003511905670166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010790824890137

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003511905670166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010790824890137

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003511905670166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062203407287598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010790824890137

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003511905670166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062203407287598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063378810882568

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036907196044922

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036907196044922

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026607513427734

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0011649131774902

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0011649131774902

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023889541625977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023889541625977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023889541625977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033783912658691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023889541625977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033783912658691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024499893188477

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025050640106201

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025050640106201

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025050640106201

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025050640106201

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025050640106201

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043797492980957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022990703582764

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001755952835083

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001755952835083

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001755952835083

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001755952835083

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001755952835083

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select count(*) as cnt from patient_registration where  patient_registration_id= '1105' and  office_id= '1' 
 Execution Time:0.00058197975158691

select count(*) as cnt from patient_registration where  patient_registration_id= '1105' and  office_id= '1' 
 Execution Time:0.00058197975158691

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1105' and  doctors_registration.office_id= '1' 
 Execution Time:0.0018448829650879

select count(*) as cnt from patient_registration where  patient_registration_id= '1105' and  office_id= '1' 
 Execution Time:0.00058197975158691

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1105' and  doctors_registration.office_id= '1' 
 Execution Time:0.0018448829650879

select fname,lname,mrdno from patient_registration where  patient_registration_id='1105' and  office_id= '1' 
 Execution Time:0.00034689903259277

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00080013275146484

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00080013275146484

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042080879211426

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00066399574279785

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0005791187286377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.01131010055542

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.01131010055542

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026190280914307

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.01131010055542

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026190280914307

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012547969818115

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.01131010055542

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026190280914307

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012547969818115

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0026628971099854

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.01131010055542

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026190280914307

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012547969818115

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0026628971099854

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050179958343506

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050179958343506

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018661022186279

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050179958343506

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018661022186279

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045430660247803

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050179958343506

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018661022186279

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045430660247803

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0069189071655273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050179958343506

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018661022186279

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045430660247803

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0069189071655273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.007504940032959

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050179958343506

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018661022186279

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045430660247803

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0069189071655273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.007504940032959

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004054069519043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050179958343506

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018661022186279

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045430660247803

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0069189071655273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.007504940032959

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004054069519043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037801265716553

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050179958343506

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018661022186279

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045430660247803

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0069189071655273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.007504940032959

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004054069519043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037801265716553

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006289005279541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029370784759521

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029370784759521

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029370784759521

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029370784759521

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029370784759521

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0030090808868408

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0030090808868408

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0058751106262207

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0071980953216553

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0071980953216553

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0017549991607666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038580894470215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038580894470215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022990703582764

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038580894470215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022990703582764

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039761066436768

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038580894470215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022990703582764

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039761066436768

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020148754119873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038580894470215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022990703582764

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039761066436768

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020148754119873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037050247192383

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038580894470215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022990703582764

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039761066436768

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020148754119873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037050247192383

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0063300132751465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038580894470215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022990703582764

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039761066436768

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020148754119873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037050247192383

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0063300132751465

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032939910888672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038580894470215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022990703582764

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039761066436768

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020148754119873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037050247192383

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0063300132751465

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032939910888672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002830982208252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019948482513428

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019948482513428

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019948482513428

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0057549476623535

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019948482513428

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0057549476623535

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036730766296387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019948482513428

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0057549476623535

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036730766296387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019948482513428

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0057549476623535

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036730766296387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019948482513428

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0057549476623535

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036730766296387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019948482513428

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0057549476623535

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036730766296387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037097930908203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027828216552734

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031590461730957

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031590461730957

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00024294853210449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005800724029541

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005800724029541

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030422210693359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006108283996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006108283996582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006108283996582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006108283996582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006108283996582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040602684020996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006108283996582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040602684020996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006108283996582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040602684020996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046586990356445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006108283996582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040602684020996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046586990356445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021481513977051

select count(*) as cnt from patient_registration where  patient_registration_id= '897' and  office_id= '1' 
 Execution Time:0.00049710273742676

select count(*) as cnt from patient_registration where  patient_registration_id= '897' and  office_id= '1' 
 Execution Time:0.00049710273742676

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='897' and  doctors_registration.office_id= '1' 
 Execution Time:0.0026009082794189

select count(*) as cnt from patient_registration where  patient_registration_id= '897' and  office_id= '1' 
 Execution Time:0.00049710273742676

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='897' and  doctors_registration.office_id= '1' 
 Execution Time:0.0026009082794189

select fname,lname,mrdno from patient_registration where  patient_registration_id='897' and  office_id= '1' 
 Execution Time:0.00035500526428223

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00076889991760254

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00076889991760254

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0051579475402832

select count(*) as cnt from patient_registration where  patient_registration_id= '433' and  office_id= '1' 
 Execution Time:0.00032711029052734

select count(*) as cnt from patient_registration where  patient_registration_id= '433' and  office_id= '1' 
 Execution Time:0.00032711029052734

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='433' and  doctors_registration.office_id= '1' 
 Execution Time:0.0018861293792725

select count(*) as cnt from patient_registration where  patient_registration_id= '433' and  office_id= '1' 
 Execution Time:0.00032711029052734

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='433' and  doctors_registration.office_id= '1' 
 Execution Time:0.0018861293792725

select fname,lname,mrdno from patient_registration where  patient_registration_id='433' and  office_id= '1' 
 Execution Time:0.00028300285339355

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00050187110900879

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00050187110900879

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00029087066650391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023603439331055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023603439331055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016283988952637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023603439331055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016283988952637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045514106750488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023603439331055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016283988952637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045514106750488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016670227050781

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057792663574219

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057792663574219

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042510032653809

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0013790130615234

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0013790130615234

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032186508178711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0042381286621094

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0042381286621094

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033481121063232

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026681423187256

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026681423187256

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026681423187256

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026681423187256

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036382675170898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026681423187256

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036382675170898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026681423187256

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036382675170898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026681423187256

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036382675170898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047421455383301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026681423187256

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036382675170898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047421455383301

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024640560150146

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099682807922363

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099682807922363

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013790130615234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099682807922363

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013790130615234

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013887882232666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099682807922363

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013790130615234

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013887882232666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018839836120605

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099682807922363

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013790130615234

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013887882232666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018839836120605

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022478103637695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099682807922363

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013790130615234

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013887882232666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018839836120605

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022478103637695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0009760856628418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099682807922363

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013790130615234

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013887882232666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018839836120605

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022478103637695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0009760856628418

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001957893371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099682807922363

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013790130615234

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013887882232666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018839836120605

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022478103637695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0009760856628418

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001957893371582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026230812072754

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0024590492248535

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0024590492248535

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0006859302520752

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049901008605957

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049901008605957

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002589225769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002589225769043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002589225769043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002589225769043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004730224609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002589225769043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004730224609375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014898777008057

select count(*) as cnt from patient_registration where  patient_registration_id= '615' and  office_id= '1' 
 Execution Time:0.00050997734069824

select count(*) as cnt from patient_registration where  patient_registration_id= '615' and  office_id= '1' 
 Execution Time:0.00050997734069824

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='615' and  doctors_registration.office_id= '1' 
 Execution Time:0.0017728805541992

select count(*) as cnt from patient_registration where  patient_registration_id= '615' and  office_id= '1' 
 Execution Time:0.00050997734069824

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='615' and  doctors_registration.office_id= '1' 
 Execution Time:0.0017728805541992

select fname,lname,mrdno from patient_registration where  patient_registration_id='615' and  office_id= '1' 
 Execution Time:0.000244140625

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00079703330993652

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00079703330993652

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00042009353637695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049901008605957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049901008605957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049901008605957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013201236724854

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049901008605957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013201236724854

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023679733276367

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031979084014893

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031979084014893

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043821334838867

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031979084014893

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043821334838867

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0039010047912598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031979084014893

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043821334838867

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0039010047912598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0020968914031982

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031979084014893

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043821334838867

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0039010047912598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0020968914031982

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0010368824005127

select count(*) as cnt from patient_registration where  patient_registration_id= '1097' and  office_id= '1' 
 Execution Time:0.0011749267578125

select count(*) as cnt from patient_registration where  patient_registration_id= '1097' and  office_id= '1' 
 Execution Time:0.0011749267578125

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1097' and  doctors_registration.office_id= '1' 
 Execution Time:0.0015690326690674

select count(*) as cnt from patient_registration where  patient_registration_id= '1097' and  office_id= '1' 
 Execution Time:0.0011749267578125

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1097' and  doctors_registration.office_id= '1' 
 Execution Time:0.0015690326690674

select fname,lname,mrdno from patient_registration where  patient_registration_id='1097' and  office_id= '1' 
 Execution Time:0.00025081634521484

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00074911117553711

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00074911117553711

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040292739868164

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00054097175598145

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00054502487182617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022580623626709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022580623626709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022580623626709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022580623626709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022580623626709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023171901702881

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023171901702881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028660297393799

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023171901702881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028660297393799

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018198490142822

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023171901702881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028660297393799

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018198490142822

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045599937438965

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023171901702881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028660297393799

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018198490142822

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045599937438965

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004666805267334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023171901702881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028660297393799

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018198490142822

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045599937438965

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004666805267334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028769969940186

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023171901702881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028660297393799

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018198490142822

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045599937438965

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004666805267334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028769969940186

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032601356506348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023171901702881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028660297393799

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018198490142822

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045599937438965

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004666805267334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028769969940186

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032601356506348

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054490566253662

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.003626823425293

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.003626823425293

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012021064758301

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0028319358825684

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0028319358825684

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0017099380493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037679672241211

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037679672241211

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031578540802002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037679672241211

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031578540802002

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037679672241211

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031578540802002

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037679672241211

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031578540802002

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037679672241211

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031578540802002

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037679672241211

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031578540802002

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044989585876465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037679672241211

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031578540802002

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044989585876465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024559497833252

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032789707183838

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032789707183838

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032789707183838

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032789707183838

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032789707183838

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014710426330566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014710426330566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014710426330566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013208389282227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014710426330566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013208389282227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053691864013672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014710426330566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013208389282227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053691864013672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013151168823242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026700496673584

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026700496673584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026700496673584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026700496673584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026700496673584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029420852661133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029420852661133

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029420852661133

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046420097351074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029420852661133

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046420097351074

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016529560089111

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0033879280090332

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0033879280090332

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0038261413574219

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011529922485352

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011529922485352

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041007995605469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033409595489502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033409595489502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032670497894287

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033409595489502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032670497894287

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0052950382232666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033409595489502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032670497894287

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0052950382232666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003709077835083

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033409595489502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032670497894287

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0052950382232666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003709077835083

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033900737762451

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033409595489502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032670497894287

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0052950382232666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003709077835083

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033900737762451

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033409595489502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032670497894287

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0052950382232666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003709077835083

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033900737762451

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0040168762207031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033409595489502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032670497894287

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0052950382232666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003709077835083

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033900737762451

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0040168762207031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0096430778503418

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0039491653442383

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0039491653442383

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0038340091705322

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038771629333496

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038771629333496

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012669563293457

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029740333557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029740333557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002842903137207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029740333557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002842903137207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027780532836914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029740333557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002842903137207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027780532836914

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027809143066406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029740333557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002842903137207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027780532836914

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027809143066406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027909278869629

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029740333557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002842903137207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027780532836914

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027809143066406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027909278869629

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027930736541748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029740333557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002842903137207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027780532836914

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027809143066406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027909278869629

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027930736541748

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027940273284912

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029740333557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002842903137207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027780532836914

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027809143066406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027909278869629

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027930736541748

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027940273284912

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0092940330505371

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00082492828369141

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00082492828369141

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037097930908203

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0029189586639404

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0029189586639404

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0018939971923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055503845214844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055503845214844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027229785919189

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063800811767578

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063800811767578

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028085708618164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0047979354858398

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0047979354858398

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0036661624908447

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031630992889404

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031630992889404

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027568340301514

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031630992889404

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027568340301514

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034279823303223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031630992889404

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027568340301514

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034279823303223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031700134277344

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031630992889404

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027568340301514

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034279823303223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031700134277344

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002979040145874

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031630992889404

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027568340301514

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034279823303223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031700134277344

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002979040145874

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031740665435791

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031630992889404

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027568340301514

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034279823303223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031700134277344

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002979040145874

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031740665435791

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022039413452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031630992889404

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027568340301514

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034279823303223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031700134277344

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002979040145874

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031740665435791

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022039413452148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052249431610107

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0011470317840576

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0011470317840576

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0018711090087891

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054287910461426

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054287910461426

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0021448135375977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053000450134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053000450134277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025620460510254

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00056314468383789

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00056314468383789

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00028514862060547

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064992904663086

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064992904663086

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022506713867188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033903121948242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033903121948242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033903121948242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055313110351562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033903121948242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055313110351562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022389888763428

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00069785118103027

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00069785118103027

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029087066650391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047397613525391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047397613525391

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033283233642578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019800662994385

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019800662994385

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019800662994385

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019800662994385

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029087066650391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019800662994385

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029087066650391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019800662994385

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029087066650391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019800662994385

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029087066650391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046682357788086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019800662994385

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029087066650391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046682357788086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017879009246826

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052404403686523

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052404403686523

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028586387634277

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039815902709961

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039815902709961

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024819374084473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003201961517334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003201961517334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003201961517334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003201961517334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003201961517334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038695335388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003201961517334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038695335388184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034399032592773

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00049209594726562

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00049209594726562

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00067591667175293

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012779235839844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012779235839844

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013689994812012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044031143188477

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044031143188477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062568187713623

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044031143188477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062568187713623

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033462047576904

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044031143188477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062568187713623

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033462047576904

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0043098926544189

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044031143188477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062568187713623

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033462047576904

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0043098926544189

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022859573364258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044031143188477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062568187713623

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033462047576904

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0043098926544189

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022859573364258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0057859420776367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044031143188477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062568187713623

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033462047576904

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0043098926544189

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022859573364258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0057859420776367

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003756046295166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044031143188477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062568187713623

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033462047576904

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0043098926544189

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022859573364258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0057859420776367

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003756046295166

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055627822875977

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00078797340393066

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00078797340393066

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00027918815612793

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049090385437012

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049090385437012

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037813186645508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020039081573486

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020039081573486

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031871795654297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020039081573486

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031871795654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011520385742188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020039081573486

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031871795654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011520385742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020039081573486

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031871795654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011520385742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044107437133789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020039081573486

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031871795654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011520385742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044107437133789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020039081573486

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031871795654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011520385742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044107437133789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020039081573486

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031871795654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011520385742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044107437133789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043797492980957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025651454925537

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0014050006866455

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0014050006866455

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028705596923828

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0081751346588135

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0081751346588135

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0019590854644775

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012421607971191

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012421607971191

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012421607971191

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010898113250732

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012421607971191

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010898113250732

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010359287261963

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012421607971191

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010898113250732

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010359287261963

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012421607971191

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010898113250732

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010359287261963

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014100074768066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012421607971191

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010898113250732

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010359287261963

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014100074768066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025999546051025

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00044512748718262

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00044512748718262

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00024604797363281

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0014030933380127

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0014030933380127

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002288818359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002288818359375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002288818359375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002288818359375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042104721069336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002288818359375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042104721069336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015380382537842

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00044703483581543

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00044703483581543

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003058910369873

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051498413085938

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051498413085938

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033330917358398

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033330917358398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026490688323975

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033330917358398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026490688323975

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031540393829346

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033330917358398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026490688323975

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031540393829346

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0075268745422363

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033330917358398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026490688323975

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031540393829346

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0075268745422363

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019791126251221

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033330917358398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026490688323975

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031540393829346

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0075268745422363

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019791126251221

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0051131248474121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033330917358398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026490688323975

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031540393829346

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0075268745422363

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019791126251221

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0051131248474121

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023949146270752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033330917358398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026490688323975

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031540393829346

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0075268745422363

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019791126251221

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0051131248474121

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023949146270752

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046079158782959

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026299953460693

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026299953460693

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001878023147583

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026299953460693

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001878023147583

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.016094923019409

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026299953460693

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001878023147583

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.016094923019409

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0035650730133057

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026299953460693

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001878023147583

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.016094923019409

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0035650730133057

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0059328079223633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026679039001465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026679039001465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026679039001465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026679039001465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048518180847168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026679039001465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048518180847168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016510486602783

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017170906066895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017170906066895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017170906066895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017170906066895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017170906066895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017170906066895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017170906066895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052189826965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017170906066895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052189826965332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034871101379395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029048919677734

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029048919677734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029048919677734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029048919677734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029048919677734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select count(*) as cnt from patient_registration where  patient_registration_id= '1122' and  office_id= '1' 
 Execution Time:0.00052690505981445

select count(*) as cnt from patient_registration where  patient_registration_id= '1122' and  office_id= '1' 
 Execution Time:0.00052690505981445

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1122' and  doctors_registration.office_id= '1' 
 Execution Time:0.0014221668243408

select count(*) as cnt from patient_registration where  patient_registration_id= '1122' and  office_id= '1' 
 Execution Time:0.00052690505981445

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1122' and  doctors_registration.office_id= '1' 
 Execution Time:0.0014221668243408

select fname,lname,mrdno from patient_registration where  patient_registration_id='1122' and  office_id= '1' 
 Execution Time:0.00024819374084473

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0018279552459717

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0018279552459717

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033187866210938

select count(*) as cnt from patient_registration where  patient_registration_id= '1123' and  office_id= '1' 
 Execution Time:0.00043392181396484

select count(*) as cnt from patient_registration where  patient_registration_id= '1123' and  office_id= '1' 
 Execution Time:0.00043392181396484

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1123' and  doctors_registration.office_id= '1' 
 Execution Time:0.0018470287322998

select count(*) as cnt from patient_registration where  patient_registration_id= '1123' and  office_id= '1' 
 Execution Time:0.00043392181396484

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1123' and  doctors_registration.office_id= '1' 
 Execution Time:0.0018470287322998

select fname,lname,mrdno from patient_registration where  patient_registration_id='1123' and  office_id= '1' 
 Execution Time:0.0002751350402832

select * from office where  office_id= '1' 
 Execution Time:0.0005180835723877

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.06455397605896

select count(*) as cnt from investigation where  name = 'GRBS' and office_id= '1' 
 Execution Time:0.00054311752319336

select * from office where  office_id= '1' 
 Execution Time:0.0025870800018311

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001183032989502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001183032989502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001183032989502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036120414733887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001183032989502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036120414733887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003201961517334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001183032989502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036120414733887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003201961517334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001183032989502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036120414733887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003201961517334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001183032989502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036120414733887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003201961517334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066804885864258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001183032989502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036120414733887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003201961517334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066804885864258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035250186920166

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053811073303223

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053811073303223

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039291381835938

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058293342590332

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058293342590332

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033581256866455

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033581256866455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038161277770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033581256866455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038161277770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033581256866455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038161277770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037860870361328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033581256866455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038161277770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037860870361328

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038750171661377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033581256866455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038161277770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037860870361328

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038750171661377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036618709564209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033581256866455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038161277770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037860870361328

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038750171661377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036618709564209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037391185760498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033581256866455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038161277770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037860870361328

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038750171661377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036618709564209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037391185760498

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043880939483643

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015819072723389

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015819072723389

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015819072723389

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015819072723389

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015819072723389

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select count(*) as cnt from patient_registration where  patient_registration_id= '1122' and  office_id= '1' 
 Execution Time:0.00056815147399902

select count(*) as cnt from patient_registration where  patient_registration_id= '1122' and  office_id= '1' 
 Execution Time:0.00056815147399902

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1122' and  doctors_registration.office_id= '1' 
 Execution Time:0.002140998840332

select count(*) as cnt from patient_registration where  patient_registration_id= '1122' and  office_id= '1' 
 Execution Time:0.00056815147399902

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1122' and  doctors_registration.office_id= '1' 
 Execution Time:0.002140998840332

select fname,lname,mrdno from patient_registration where  patient_registration_id='1122' and  office_id= '1' 
 Execution Time:0.00050687789916992

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00063991546630859

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00063991546630859

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050997734069824

select * from investigation where  investigation_id=20  and office_id= 1 and status=1 
 Execution Time:0.0032861232757568

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023448467254639

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023448467254639

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023448467254639

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028777122497559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023448467254639

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028777122497559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023448467254639

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028777122497559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002138614654541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002138614654541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002138614654541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002138614654541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002138614654541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036096572875977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015060901641846

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050997734069824

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050997734069824

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00026488304138184

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00039100646972656

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00039100646972656

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0002748966217041

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047183036804199

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047183036804199

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00018906593322754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040102005004883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024409294128418

select count(*) as cnt from patient_registration where  patient_registration_id= '670' and  office_id= '1' 
 Execution Time:0.006248950958252

select count(*) as cnt from patient_registration where  patient_registration_id= '670' and  office_id= '1' 
 Execution Time:0.006248950958252

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='670' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027978420257568

select count(*) as cnt from patient_registration where  patient_registration_id= '670' and  office_id= '1' 
 Execution Time:0.006248950958252

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='670' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027978420257568

select fname,lname,mrdno from patient_registration where  patient_registration_id='670' and  office_id= '1' 
 Execution Time:0.0023810863494873

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0053560733795166

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0053560733795166

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0018398761749268

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049591064453125

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049591064453125

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039410591125488

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016119480133057

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016119480133057

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0057578086853027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017600059509277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017600059509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017600059509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017600059509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017600059509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017600059509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017600059509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051307678222656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017600059509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051307678222656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0074748992919922

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0009160041809082

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0009160041809082

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038003921508789

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00087308883666992

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00087308883666992

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00036501884460449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0022270679473877

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0022270679473877

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031685829162598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078487396240234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078487396240234

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078487396240234

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078487396240234

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069284439086914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078487396240234

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069284439086914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052168369293213

select count(*) as cnt from patient_registration where  patient_registration_id= '1028' and  office_id= '1' 
 Execution Time:0.00044417381286621

select count(*) as cnt from patient_registration where  patient_registration_id= '1028' and  office_id= '1' 
 Execution Time:0.00044417381286621

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1028' and  doctors_registration.office_id= '1' 
 Execution Time:0.0018739700317383

select count(*) as cnt from patient_registration where  patient_registration_id= '1028' and  office_id= '1' 
 Execution Time:0.00044417381286621

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1028' and  doctors_registration.office_id= '1' 
 Execution Time:0.0018739700317383

select fname,lname,mrdno from patient_registration where  patient_registration_id='1028' and  office_id= '1' 
 Execution Time:0.00028014183044434

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00052404403686523

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00052404403686523

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00039100646972656

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00097203254699707

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00097203254699707

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033998489379883

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.014729976654053

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.014729976654053

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0036129951477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071382522583008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071382522583008

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071382522583008

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071382522583008

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070714950561523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071382522583008

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070714950561523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003756046295166

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00057601928710938

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00057601928710938

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0034220218658447

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0031349658966064

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0031349658966064

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0039339065551758

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035431385040283

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035431385040283

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035431385040283

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035431385040283

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025296211242676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035431385040283

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025296211242676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035431385040283

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025296211242676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035431385040283

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025296211242676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026869773864746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035431385040283

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025296211242676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026869773864746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024969577789307

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0046110153198242

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0046110153198242

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0030598640441895

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050091743469238

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050091743469238

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015521049499512

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015521049499512

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015521049499512

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034689903259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015521049499512

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034689903259277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016031265258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089192390441895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089192390441895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089192390441895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089192390441895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089192390441895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004119873046875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00099515914916992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089192390441895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004119873046875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00099515914916992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035548210144043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089192390441895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004119873046875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00099515914916992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035548210144043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0045020580291748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089192390441895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004119873046875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00099515914916992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035548210144043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0045020580291748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0074558258056641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0084490776062012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0084490776062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0084490776062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037550926208496

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0084490776062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037550926208496

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039470195770264

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0084490776062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037550926208496

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039470195770264

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0057451725006104

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0084490776062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037550926208496

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039470195770264

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0057451725006104

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034470558166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0084490776062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037550926208496

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039470195770264

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0057451725006104

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034470558166504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038280487060547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0084490776062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037550926208496

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039470195770264

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0057451725006104

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034470558166504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038280487060547

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042030811309814

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035381317138672

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035381317138672

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00069594383239746

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0040791034698486

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0040791034698486

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0030100345611572

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006868839263916

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006868839263916

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018391609191895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018391609191895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018391609191895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018391609191895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018391609191895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0043292045593262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018391609191895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0043292045593262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018391609191895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0043292045593262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082302093505859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018391609191895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0043292045593262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082302093505859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023930072784424

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053095817565918

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053095817565918

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00022101402282715

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061893463134766

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061893463134766

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001093864440918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001093864440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018630027770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001093864440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018630027770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001093864440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018630027770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031728744506836

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001093864440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018630027770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031728744506836

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018250942230225

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001093864440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018630027770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031728744506836

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018250942230225

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038161277770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001093864440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018630027770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031728744506836

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018250942230225

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038161277770996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009768009185791

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001093864440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018630027770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031728744506836

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018250942230225

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038161277770996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009768009185791

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055220127105713

select count(*) as cnt from patient_registration where  patient_registration_id= '494' and  office_id= '1' 
 Execution Time:0.00049591064453125

select count(*) as cnt from patient_registration where  patient_registration_id= '494' and  office_id= '1' 
 Execution Time:0.00049591064453125

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='494' and  doctors_registration.office_id= '1' 
 Execution Time:0.0019629001617432

select count(*) as cnt from patient_registration where  patient_registration_id= '494' and  office_id= '1' 
 Execution Time:0.00049591064453125

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='494' and  doctors_registration.office_id= '1' 
 Execution Time:0.0019629001617432

select fname,lname,mrdno from patient_registration where  patient_registration_id='494' and  office_id= '1' 
 Execution Time:0.00028896331787109

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037002563476562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037002563476562

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002899169921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015020370483398

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015020370483398

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015020370483398

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015020370483398

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015020370483398

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00026202201843262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025019645690918

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0024750232696533

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0024750232696533

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0034420490264893

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005340576171875

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005340576171875

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00085997581481934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018095970153809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018095970153809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018095970153809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018095970153809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018095970153809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032496452331543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001417875289917

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0004570484161377

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0004570484161377

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031709671020508

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056815147399902

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056815147399902

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0060009956359863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0060009956359863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040817260742188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0060009956359863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040817260742188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0060009956359863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040817260742188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0060009956359863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040817260742188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055813789367676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0060009956359863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040817260742188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055813789367676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025241374969482

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030684471130371

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030684471130371

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00022506713867188

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059294700622559

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059294700622559

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044417381286621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059103965759277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059103965759277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025420188903809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064840316772461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064840316772461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038330554962158

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064840316772461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038330554962158

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013999938964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064840316772461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038330554962158

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013999938964844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0072019100189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064840316772461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038330554962158

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013999938964844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0072019100189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001194953918457

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064840316772461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038330554962158

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013999938964844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0072019100189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001194953918457

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043599605560303

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064840316772461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038330554962158

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013999938964844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0072019100189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001194953918457

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043599605560303

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037169456481934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064840316772461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038330554962158

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013999938964844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0072019100189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001194953918457

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043599605560303

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037169456481934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058679580688477

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035049915313721

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035049915313721

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016241073608398

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035049915313721

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016241073608398

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035049915313721

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016241073608398

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035049915313721

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016241073608398

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027837753295898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035049915313721

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016241073608398

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027837753295898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087950229644775

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00071907043457031

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00071907043457031

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00019979476928711

select count(*) as cnt from patient_registration where  patient_registration_id= '997' and  office_id= '1' 
 Execution Time:0.0038421154022217

select count(*) as cnt from patient_registration where  patient_registration_id= '997' and  office_id= '1' 
 Execution Time:0.0038421154022217

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='997' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041241645812988

select count(*) as cnt from patient_registration where  patient_registration_id= '997' and  office_id= '1' 
 Execution Time:0.0038421154022217

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='997' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041241645812988

select fname,lname,mrdno from patient_registration where  patient_registration_id='997' and  office_id= '1' 
 Execution Time:0.0036640167236328

select count(*) as cnt from patient_registration where  patient_registration_id= '996' and  office_id= '1' 
 Execution Time:0.0038409233093262

select count(*) as cnt from patient_registration where  patient_registration_id= '996' and  office_id= '1' 
 Execution Time:0.0038409233093262

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='996' and  doctors_registration.office_id= '1' 
 Execution Time:0.0046629905700684

select count(*) as cnt from patient_registration where  patient_registration_id= '996' and  office_id= '1' 
 Execution Time:0.0038409233093262

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='996' and  doctors_registration.office_id= '1' 
 Execution Time:0.0046629905700684

select fname,lname,mrdno from patient_registration where  patient_registration_id='996' and  office_id= '1' 
 Execution Time:0.0037939548492432

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00072908401489258

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00072908401489258

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094795227050781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094795227050781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019450187683105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094795227050781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019450187683105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013368129730225

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094795227050781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019450187683105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013368129730225

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020489692687988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094795227050781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019450187683105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013368129730225

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020489692687988

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012989044189453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094795227050781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019450187683105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013368129730225

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020489692687988

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012989044189453

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0068888664245605

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094795227050781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019450187683105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013368129730225

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020489692687988

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012989044189453

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0068888664245605

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.015022993087769

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094795227050781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019450187683105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013368129730225

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020489692687988

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012989044189453

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0068888664245605

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.015022993087769

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042009353637695

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00051379203796387

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00051379203796387

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0007331371307373

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00071811676025391

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00071811676025391

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00073719024658203

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066781044006348

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066781044006348

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012431144714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012431144714355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012431144714355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012431144714355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040483474731445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012431144714355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040483474731445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012431144714355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040483474731445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012431144714355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040483474731445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060796737670898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012431144714355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040483474731445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060796737670898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027730464935303

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022790431976318

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022790431976318

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038230419158936

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022790431976318

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038230419158936

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022790431976318

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038230419158936

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022790431976318

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038230419158936

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022790431976318

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038230419158936

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022790431976318

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038230419158936

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061988830566406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022790431976318

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038230419158936

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061988830566406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024271011352539

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.001784086227417

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.001784086227417

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0026791095733643

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038981437683105

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038981437683105

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043988227844238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043988227844238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043988227844238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043988227844238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046396255493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043988227844238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046396255493164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024471282958984

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031805038452148

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031805038452148

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0002739429473877

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0040979385375977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0040979385375977

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065207481384277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0086269378662109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0086269378662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0086269378662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0086269378662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0086269378662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044798851013184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0086269378662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044798851013184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0086269378662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044798851013184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056695938110352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0086269378662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044798851013184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056695938110352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065851211547852

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00081706047058105

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00081706047058105

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041294097900391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016858577728271

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016858577728271

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.004741907119751

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018939971923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018939971923828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020711421966553

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018939971923828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020711421966553

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017099380493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018939971923828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020711421966553

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017099380493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0057921409606934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018939971923828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020711421966553

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017099380493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0057921409606934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017650127410889

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018939971923828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020711421966553

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017099380493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0057921409606934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017650127410889

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037519931793213

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018939971923828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020711421966553

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017099380493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0057921409606934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017650127410889

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037519931793213

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028040409088135

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018939971923828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020711421966553

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017099380493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0057921409606934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017650127410889

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037519931793213

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028040409088135

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043461322784424

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0007021427154541

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0007021427154541

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00026392936706543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033400058746338

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033400058746338

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0048830509185791

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00370192527771

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00370192527771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017769336700439

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00370192527771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017769336700439

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011739730834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00370192527771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017769336700439

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011739730834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015251636505127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00370192527771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017769336700439

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011739730834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015251636505127

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014190673828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00370192527771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017769336700439

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011739730834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015251636505127

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014190673828125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00370192527771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017769336700439

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011739730834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015251636505127

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014190673828125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083398818969727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00370192527771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017769336700439

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011739730834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015251636505127

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014190673828125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083398818969727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027182102203369

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035190582275391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035190582275391

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029492378234863

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00067996978759766

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00067996978759766

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012431144714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012431144714355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012431144714355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012431144714355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067901611328125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012431144714355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067901611328125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031900405883789

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00041294097900391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` IS NULL 
 Execution Time:0.00086092948913574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00058197975158691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00054812431335449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00079989433288574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0036909580230713

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025119781494141

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00080704689025879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0025742053985596

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0057508945465088

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0045640468597412

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00058913230895996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00057220458984375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00067782402038574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026381015777588

select count(*) as cnt from complaints where  name = 'sd' and office_id= '1' 
 Execution Time:0.00081396102905273

select count(*) as cnt from complaints where  name = 'ada' and office_id= '1' 
 Execution Time:0.00043010711669922

select count(*) as cnt from complaints where  name = 'sfdsfdf' and office_id= '1' 
 Execution Time:0.00056695938110352

select count(*) as cnt from complaints where  name = 'sdasdas' and office_id= '1' 
 Execution Time:0.0003659725189209

select count(*) as cnt from complaints where  name = 'asdasd' and office_id= '1' 
 Execution Time:0.0015850067138672

select count(*) as cnt from complaints where  name = 'asdas' and office_id= '1' 
 Execution Time:0.0010221004486084

select count(*) as cnt from complaints where  name = 'asdasdas' and office_id= '1' 
 Execution Time:0.00076794624328613

select count(*) as cnt from complaints where  name = 'asdasdsa' and office_id= '1' 
 Execution Time:0.00049805641174316

select count(*) as cnt from complaints where  name = 'asdasdsad' and office_id= '1' 
 Execution Time:0.00039911270141602

select count(*) as cnt from complaints where  name = 'asdasdasd' and office_id= '1' 
 Execution Time:0.00057291984558105

select count(*) as cnt from complaints where  name = 'asssssssss' and office_id= '1' 
 Execution Time:0.00038814544677734

select count(*) as cnt from complaints where  name = 'asdasdasd' and office_id= '1' 
 Execution Time:0.00046706199645996

select count(*) as cnt from complaints where  name = 'asdasdasdd' and office_id= '1' 
 Execution Time:0.00048208236694336

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.001755952835083

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017869472503662

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00055885314941406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00054788589477539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001884937286377

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 38 
 Execution Time:0.00050902366638184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00085997581481934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0005800724029541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0012340545654297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0010449886322021

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00051307678222656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00069212913513184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00075984001159668

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0007939338684082

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00093293190002441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00055813789367676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0006401538848877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00045609474182129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00082111358642578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00072193145751953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021440982818604

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00072407722473145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00041794776916504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074


select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028769969940186

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028769969940186

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018320083618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0060319900512695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0060319900512695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021672248840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0060319900512695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021672248840332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0074520111083984

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0060319900512695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021672248840332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0074520111083984

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028471946716309

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0060319900512695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021672248840332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0074520111083984

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028471946716309

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0068719387054443

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0060319900512695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021672248840332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0074520111083984

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028471946716309

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0068719387054443

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0060319900512695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021672248840332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0074520111083984

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028471946716309

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0068719387054443

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.016778230667114

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0060319900512695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021672248840332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0074520111083984

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028471946716309

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0068719387054443

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.016778230667114

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0046291351318359

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0046291351318359

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0046291351318359

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0023849010467529

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00051712989807129

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00051712989807129

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00086092948913574

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00051712989807129

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00086092948913574

select fname,lname,mrdno from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00029397010803223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098991394042969

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098991394042969

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098991394042969

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098991394042969

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098991394042969

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032930374145508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032930374145508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021388530731201

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032930374145508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021388530731201

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0052509307861328

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032930374145508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021388530731201

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0052509307861328

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0023460388183594

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032930374145508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021388530731201

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0052509307861328

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0023460388183594

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0027458667755127

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00062298774719238

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00062298774719238

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00027704238891602

select count(*) as cnt from billing_master where  billing_master_id= '12' and  office_id= '1' 
 Execution Time:0.0004889965057373

select count(*) as cnt from billing_master where  billing_master_id= '12' and  office_id= '1' 
 Execution Time:0.0004889965057373

select * from billing_master where  billing_master_id= '12' and  office_id= '1' 
 Execution Time:0.0002288818359375

select count(*) as cnt from billing_master where  billing_master_id= '12' and  office_id= '1' 
 Execution Time:0.0004889965057373

select * from billing_master where  billing_master_id= '12' and  office_id= '1' 
 Execution Time:0.0002288818359375

select * from billing_detail where  billing_master_id= '12' 
 Execution Time:0.00023984909057617

select count(*) as cnt from billing_master where  billing_master_id= '12' and  office_id= '1' 
 Execution Time:0.0004889965057373

select * from billing_master where  billing_master_id= '12' and  office_id= '1' 
 Execution Time:0.0002288818359375

select * from billing_detail where  billing_master_id= '12' 
 Execution Time:0.00023984909057617

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0002140998840332

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.0002448558807373

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.0002448558807373

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='4' and  doctors_registration.office_id= '1' 
 Execution Time:0.002263069152832

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.0002448558807373

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='4' and  doctors_registration.office_id= '1' 
 Execution Time:0.002263069152832

select fname,lname,mrdno from patient_registration where  patient_registration_id='4' and  office_id= '1' 
 Execution Time:0.00015115737915039

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.001201868057251

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031280517578125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004410982131958

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004410982131958

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010490417480469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004410982131958

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010490417480469

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010437965393066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004410982131958

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010490417480469

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010437965393066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004410982131958

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010490417480469

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010437965393066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0010650157928467


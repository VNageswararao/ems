select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0061180591583252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0061180591583252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.007361888885498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0061180591583252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.007361888885498

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035820007324219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0061180591583252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.007361888885498

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035820007324219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002453088760376

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0061180591583252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.007361888885498

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035820007324219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002453088760376

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019309520721436

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0061180591583252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.007361888885498

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035820007324219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002453088760376

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019309520721436

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0061180591583252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.007361888885498

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035820007324219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002453088760376

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019309520721436

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028150081634521

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0061180591583252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.007361888885498

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035820007324219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002453088760376

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019309520721436

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028150081634521

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049760341644287

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047492980957031

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047492980957031

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002281665802002

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0040090084075928

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0040090084075928

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0018441677093506

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016105175018311

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016105175018311

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005850076675415

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016105175018311

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005850076675415

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018179416656494

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016105175018311

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005850076675415

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018179416656494

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038049221038818

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016105175018311

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005850076675415

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018179416656494

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038049221038818

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028080940246582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016105175018311

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005850076675415

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018179416656494

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038049221038818

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028080940246582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018289089202881

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016105175018311

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005850076675415

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018179416656494

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038049221038818

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028080940246582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018289089202881

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0067610740661621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016105175018311

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.005850076675415

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018179416656494

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038049221038818

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028080940246582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018289089202881

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0067610740661621

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048940181732178

select count(*) as cnt from patient_registration where  patient_registration_id= '2147' and  office_id= '1' 
 Execution Time:0.00033998489379883

select count(*) as cnt from patient_registration where  patient_registration_id= '2147' and  office_id= '1' 
 Execution Time:0.00033998489379883

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2147' and  doctors_registration.office_id= '1' 
 Execution Time:0.002310037612915

select count(*) as cnt from patient_registration where  patient_registration_id= '2147' and  office_id= '1' 
 Execution Time:0.00033998489379883

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2147' and  doctors_registration.office_id= '1' 
 Execution Time:0.002310037612915

select fname,lname,mrdno from patient_registration where  patient_registration_id='2147' and  office_id= '1' 
 Execution Time:0.00019502639770508

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0035710334777832

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0035710334777832

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00063300132751465

select count(*) as cnt from patient_registration where  patient_registration_id= '2468' and  office_id= '1' 
 Execution Time:0.0012638568878174

select count(*) as cnt from patient_registration where  patient_registration_id= '2468' and  office_id= '1' 
 Execution Time:0.0012638568878174

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2468' and  doctors_registration.office_id= '1' 
 Execution Time:0.0051572322845459

select count(*) as cnt from patient_registration where  patient_registration_id= '2468' and  office_id= '1' 
 Execution Time:0.0012638568878174

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2468' and  doctors_registration.office_id= '1' 
 Execution Time:0.0051572322845459

select fname,lname,mrdno from patient_registration where  patient_registration_id='2468' and  office_id= '1' 
 Execution Time:0.00048303604125977

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00070905685424805

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00070905685424805

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037908554077148

select count(*) as cnt from patient_registration where  patient_registration_id= '2567' and  office_id= '1' 
 Execution Time:0.00049400329589844

select count(*) as cnt from patient_registration where  patient_registration_id= '2567' and  office_id= '1' 
 Execution Time:0.00049400329589844

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2567' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025589466094971

select count(*) as cnt from patient_registration where  patient_registration_id= '2567' and  office_id= '1' 
 Execution Time:0.00049400329589844

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2567' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025589466094971

select fname,lname,mrdno from patient_registration where  patient_registration_id='2567' and  office_id= '1' 
 Execution Time:0.00017881393432617

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0036590099334717

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0036590099334717

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0032448768615723

select count(*) as cnt from patient_registration where  patient_registration_id= '2534' and  office_id= '1' 
 Execution Time:0.00044584274291992

select count(*) as cnt from patient_registration where  patient_registration_id= '2534' and  office_id= '1' 
 Execution Time:0.00044584274291992

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2534' and  doctors_registration.office_id= '1' 
 Execution Time:0.00288987159729

select count(*) as cnt from patient_registration where  patient_registration_id= '2534' and  office_id= '1' 
 Execution Time:0.00044584274291992

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2534' and  doctors_registration.office_id= '1' 
 Execution Time:0.00288987159729

select fname,lname,mrdno from patient_registration where  patient_registration_id='2534' and  office_id= '1' 
 Execution Time:0.00022482872009277

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0024850368499756

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0024850368499756

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0023131370544434

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0040221214294434

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0040221214294434

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0009300708770752

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0011489391326904

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0011489391326904

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00033688545227051

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058078765869141

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058078765869141

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033211708068848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034110546112061

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034110546112061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038571357727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034110546112061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038571357727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038399696350098

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034110546112061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038571357727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038399696350098

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037510395050049

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034110546112061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038571357727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038399696350098

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037510395050049

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033628940582275

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034110546112061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038571357727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038399696350098

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037510395050049

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033628940582275

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024340152740479

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034110546112061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038571357727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038399696350098

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037510395050049

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033628940582275

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024340152740479

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0043880939483643

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034110546112061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038571357727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038399696350098

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037510395050049

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033628940582275

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024340152740479

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0043880939483643

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080108642578125

select count(*) as cnt from patient_registration where  patient_registration_id= '14' and  office_id= '1' 
 Execution Time:0.0035829544067383

select count(*) as cnt from patient_registration where  patient_registration_id= '14' and  office_id= '1' 
 Execution Time:0.0035829544067383

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='14' and  doctors_registration.office_id= '1' 
 Execution Time:0.005018949508667

select count(*) as cnt from patient_registration where  patient_registration_id= '14' and  office_id= '1' 
 Execution Time:0.0035829544067383

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='14' and  doctors_registration.office_id= '1' 
 Execution Time:0.005018949508667

select fname,lname,mrdno from patient_registration where  patient_registration_id='14' and  office_id= '1' 
 Execution Time:0.00099897384643555

select count(*) as cnt from patient_registration where  patient_registration_id= '1746' and  office_id= '1' 
 Execution Time:0.00043702125549316

select count(*) as cnt from patient_registration where  patient_registration_id= '1746' and  office_id= '1' 
 Execution Time:0.00043702125549316

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1746' and  doctors_registration.office_id= '1' 
 Execution Time:0.0034818649291992

select count(*) as cnt from patient_registration where  patient_registration_id= '1746' and  office_id= '1' 
 Execution Time:0.00043702125549316

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1746' and  doctors_registration.office_id= '1' 
 Execution Time:0.0034818649291992

select fname,lname,mrdno from patient_registration where  patient_registration_id='1746' and  office_id= '1' 
 Execution Time:0.00029516220092773

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00035500526428223

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00035500526428223

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00030016899108887

select count(*) as cnt from patient_registration where  patient_registration_id= '2344' and  office_id= '1' 
 Execution Time:0.00049710273742676

select count(*) as cnt from patient_registration where  patient_registration_id= '2344' and  office_id= '1' 
 Execution Time:0.00049710273742676

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2344' and  doctors_registration.office_id= '1' 
 Execution Time:0.0035209655761719

select count(*) as cnt from patient_registration where  patient_registration_id= '2344' and  office_id= '1' 
 Execution Time:0.00049710273742676

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2344' and  doctors_registration.office_id= '1' 
 Execution Time:0.0035209655761719

select fname,lname,mrdno from patient_registration where  patient_registration_id='2344' and  office_id= '1' 
 Execution Time:0.00028300285339355

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00065207481384277

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00065207481384277

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0055489540100098

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031321048736572

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031321048736572

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018579959869385

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031321048736572

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018579959869385

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016078948974609

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031321048736572

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018579959869385

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016078948974609

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042610168457031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031321048736572

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018579959869385

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016078948974609

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042610168457031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036630630493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031321048736572

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018579959869385

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016078948974609

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042610168457031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036630630493164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038309097290039

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031321048736572

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018579959869385

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016078948974609

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042610168457031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036630630493164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038309097290039

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011843919754028

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0011250972747803

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0011250972747803

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00042605400085449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0028960704803467

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0028960704803467

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0024960041046143

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013947010040283

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013947010040283

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004335880279541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013947010040283

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004335880279541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035228729248047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013947010040283

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004335880279541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035228729248047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042531490325928

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013947010040283

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004335880279541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035228729248047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042531490325928

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017910003662109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013947010040283

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004335880279541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035228729248047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042531490325928

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017910003662109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035738945007324

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013947010040283

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004335880279541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035228729248047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042531490325928

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017910003662109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035738945007324

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0056319236755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013947010040283

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004335880279541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035228729248047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042531490325928

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017910003662109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035738945007324

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0056319236755371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0088770389556885

select count(*) as cnt from patient_registration where  patient_registration_id= '408' and  office_id= '1' 
 Execution Time:0.00035500526428223

select count(*) as cnt from patient_registration where  patient_registration_id= '408' and  office_id= '1' 
 Execution Time:0.00035500526428223

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='408' and  doctors_registration.office_id= '1' 
 Execution Time:0.003741979598999

select count(*) as cnt from patient_registration where  patient_registration_id= '408' and  office_id= '1' 
 Execution Time:0.00035500526428223

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='408' and  doctors_registration.office_id= '1' 
 Execution Time:0.003741979598999

select fname,lname,mrdno from patient_registration where  patient_registration_id='408' and  office_id= '1' 
 Execution Time:0.0017938613891602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0019431114196777

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0019431114196777

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025391578674316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011019706726074

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011019706726074

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044584274291992

select count(*) as cnt from patient_registration where  patient_registration_id= '1100' and  office_id= '1' 
 Execution Time:0.00045895576477051

select count(*) as cnt from patient_registration where  patient_registration_id= '1100' and  office_id= '1' 
 Execution Time:0.00045895576477051

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1100' and  doctors_registration.office_id= '1' 
 Execution Time:0.0043718814849854

select count(*) as cnt from patient_registration where  patient_registration_id= '1100' and  office_id= '1' 
 Execution Time:0.00045895576477051

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1100' and  doctors_registration.office_id= '1' 
 Execution Time:0.0043718814849854

select fname,lname,mrdno from patient_registration where  patient_registration_id='1100' and  office_id= '1' 
 Execution Time:0.00039792060852051

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00039982795715332

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00039982795715332

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00027704238891602

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00073003768920898

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00073003768920898

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00026392936706543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066494941711426

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066494941711426

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00020718574523926

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066184997558594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066184997558594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066184997558594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066184997558594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001662015914917

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066184997558594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001662015914917

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031030178070068

select count(*) as cnt from patient_registration where  patient_registration_id= '2543' and  office_id= '1' 
 Execution Time:0.0048809051513672

select count(*) as cnt from patient_registration where  patient_registration_id= '2543' and  office_id= '1' 
 Execution Time:0.0048809051513672

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2543' and  doctors_registration.office_id= '1' 
 Execution Time:0.0095357894897461

select count(*) as cnt from patient_registration where  patient_registration_id= '2543' and  office_id= '1' 
 Execution Time:0.0048809051513672

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2543' and  doctors_registration.office_id= '1' 
 Execution Time:0.0095357894897461

select fname,lname,mrdno from patient_registration where  patient_registration_id='2543' and  office_id= '1' 
 Execution Time:0.0043179988861084

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0051891803741455

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0051891803741455

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.003795862197876

select count(*) as cnt from patient_registration where  patient_registration_id= '2516' and  office_id= '1' 
 Execution Time:0.0003199577331543

select count(*) as cnt from patient_registration where  patient_registration_id= '2516' and  office_id= '1' 
 Execution Time:0.0003199577331543

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2516' and  doctors_registration.office_id= '1' 
 Execution Time:0.0040249824523926

select count(*) as cnt from patient_registration where  patient_registration_id= '2516' and  office_id= '1' 
 Execution Time:0.0003199577331543

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2516' and  doctors_registration.office_id= '1' 
 Execution Time:0.0040249824523926

select fname,lname,mrdno from patient_registration where  patient_registration_id='2516' and  office_id= '1' 
 Execution Time:0.00027012825012207

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00069499015808105

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00069499015808105

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037598609924316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037598609924316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037598609924316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070905685424805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037598609924316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070905685424805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034630298614502

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0006110668182373

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0006110668182373

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003509521484375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055909156799316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055909156799316

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006868839263916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006868839263916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049228668212891

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003361701965332

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003361701965332

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00052499771118164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0046000480651855

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0046000480651855

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037360191345215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037360191345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037360191345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048470497131348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037360191345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048470497131348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.000885009765625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037360191345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048470497131348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.000885009765625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036690235137939

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037360191345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048470497131348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.000885009765625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036690235137939

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003014087677002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037360191345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048470497131348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.000885009765625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036690235137939

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003014087677002

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002547025680542

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037360191345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048470497131348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.000885009765625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036690235137939

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003014087677002

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002547025680542

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041680335998535

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018000602722168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018000602722168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018000602722168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015783309936523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018000602722168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015783309936523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039386749267578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018000602722168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015783309936523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039386749267578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029211044311523

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0004580020904541

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0004580020904541

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00018811225891113

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065088272094727

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065088272094727

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036883354187012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034689903259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034689903259277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034689903259277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034689903259277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006558895111084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034689903259277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006558895111084

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032849311828613

select count(*) as cnt from patient_registration where  patient_registration_id= '2297' and  office_id= '1' 
 Execution Time:0.00048494338989258

select count(*) as cnt from patient_registration where  patient_registration_id= '2297' and  office_id= '1' 
 Execution Time:0.00048494338989258

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2297' and  doctors_registration.office_id= '1' 
 Execution Time:0.0026872158050537

select count(*) as cnt from patient_registration where  patient_registration_id= '2297' and  office_id= '1' 
 Execution Time:0.00048494338989258

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2297' and  doctors_registration.office_id= '1' 
 Execution Time:0.0026872158050537

select fname,lname,mrdno from patient_registration where  patient_registration_id='2297' and  office_id= '1' 
 Execution Time:0.00024008750915527

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0005791187286377

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0005791187286377

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00030207633972168

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00051999092102051

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00051999092102051

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00033211708068848

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034284591674805

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034284591674805

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001255989074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001255989074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001255989074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057387351989746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001255989074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057387351989746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011999607086182

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001255989074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057387351989746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011999607086182

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027120113372803

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001255989074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057387351989746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011999607086182

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027120113372803

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019609928131104

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001255989074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057387351989746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011999607086182

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027120113372803

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019609928131104

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062081813812256

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049819946289062

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049819946289062

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049819946289062

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029239654541016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049819946289062

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029239654541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049819946289062

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029239654541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0023078918457031

select count(*) as cnt from patient_registration where  patient_registration_id= '2567' and  office_id= '1' 
 Execution Time:0.0004432201385498

select count(*) as cnt from patient_registration where  patient_registration_id= '2567' and  office_id= '1' 
 Execution Time:0.0004432201385498

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2567' and  doctors_registration.office_id= '1' 
 Execution Time:0.0077228546142578

select count(*) as cnt from patient_registration where  patient_registration_id= '2567' and  office_id= '1' 
 Execution Time:0.0004432201385498

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2567' and  doctors_registration.office_id= '1' 
 Execution Time:0.0077228546142578

select fname,lname,mrdno from patient_registration where  patient_registration_id='2567' and  office_id= '1' 
 Execution Time:0.00035595893859863

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0036880970001221

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0036880970001221

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043511390686035

select * from investigation where  investigation_id=17  and office_id= 1 and status=1 
 Execution Time:0.00052499771118164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036101341247559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036101341247559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036101341247559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036101341247559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036101341247559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select count(*) as cnt from patient_registration where  patient_registration_id= '2468' and  office_id= '1' 
 Execution Time:0.00055313110351562

select count(*) as cnt from patient_registration where  patient_registration_id= '2468' and  office_id= '1' 
 Execution Time:0.00055313110351562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2468' and  doctors_registration.office_id= '1' 
 Execution Time:0.0049018859863281

select count(*) as cnt from patient_registration where  patient_registration_id= '2468' and  office_id= '1' 
 Execution Time:0.00055313110351562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2468' and  doctors_registration.office_id= '1' 
 Execution Time:0.0049018859863281

select fname,lname,mrdno from patient_registration where  patient_registration_id='2468' and  office_id= '1' 
 Execution Time:0.0005030632019043

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.041182994842529

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.041182994842529

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0088250637054443

select * from ipdcharge where  ipdcharge_id=3  and office_id= 1 and status=1 
 Execution Time:0.0029408931732178

select * from ipdcharge where  ipdcharge_id=4  and office_id= 1 and status=1 
 Execution Time:0.00076103210449219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077910423278809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077910423278809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077910423278809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077910423278809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077910423278809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029971599578857

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029971599578857

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030219554901123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029971599578857

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030219554901123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0044090747833252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029971599578857

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030219554901123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0044090747833252

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0072071552276611

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029971599578857

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030219554901123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0044090747833252

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0072071552276611

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0058858394622803

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029971599578857

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030219554901123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0044090747833252

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0072071552276611

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0058858394622803

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031111240386963

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029971599578857

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030219554901123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0044090747833252

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0072071552276611

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0058858394622803

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031111240386963

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027499198913574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029971599578857

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030219554901123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0044090747833252

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0072071552276611

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0058858394622803

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031111240386963

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027499198913574

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010953187942505

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037908554077148

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037908554077148

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00015592575073242

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054621696472168

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054621696472168

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043606758117676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036191940307617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036191940307617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049989223480225

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064089298248291

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064089298248291

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064089298248291

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064089298248291

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00018978118896484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064089298248291

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00018978118896484

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059981346130371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059981346130371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0064280033111572

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059981346130371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0064280033111572

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059981346130371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0064280033111572

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059981346130371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0064280033111572

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052618980407715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052618980407715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052618980407715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052618980407715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003359317779541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052618980407715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003359317779541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052618980407715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003359317779541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082302093505859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052618980407715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003359317779541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082302093505859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057930946350098

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057439804077148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057439804077148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034408569335938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057439804077148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034408569335938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0015640258789062

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057439804077148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034408569335938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0015640258789062

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037350654602051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057439804077148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034408569335938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0015640258789062

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037350654602051

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055370330810547

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055370330810547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055370330810547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0041511058807373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055370330810547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0041511058807373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0022890567779541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055370330810547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0041511058807373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0022890567779541

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select count(*) as cnt from patient_registration where  patient_registration_id= '1746' and  office_id= '1' 
 Execution Time:0.0051660537719727

select count(*) as cnt from patient_registration where  patient_registration_id= '1746' and  office_id= '1' 
 Execution Time:0.0051660537719727

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1746' and  doctors_registration.office_id= '1' 
 Execution Time:0.0045070648193359

select count(*) as cnt from patient_registration where  patient_registration_id= '1746' and  office_id= '1' 
 Execution Time:0.0051660537719727

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1746' and  doctors_registration.office_id= '1' 
 Execution Time:0.0045070648193359

select fname,lname,mrdno from patient_registration where  patient_registration_id='1746' and  office_id= '1' 
 Execution Time:0.00075984001159668

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00075101852416992

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00075101852416992

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057101249694824

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.0018539428710938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005918025970459

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005918025970459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004849910736084

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005918025970459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004849910736084

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005918025970459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004849910736084

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005918025970459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004849910736084

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075483322143555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075483322143555

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054018497467041

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00098586082458496

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00098586082458496

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00060892105102539

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068902969360352

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068902969360352

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035810470581055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004730224609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004730224609375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003957986831665

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054609775543213

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054609775543213

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054609775543213

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054609775543213

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054609775543213

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select count(*) as cnt from patient_registration where  patient_registration_id= '2147' and  office_id= '1' 
 Execution Time:0.00055098533630371

select count(*) as cnt from patient_registration where  patient_registration_id= '2147' and  office_id= '1' 
 Execution Time:0.00055098533630371

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2147' and  doctors_registration.office_id= '1' 
 Execution Time:0.0044898986816406

select count(*) as cnt from patient_registration where  patient_registration_id= '2147' and  office_id= '1' 
 Execution Time:0.00055098533630371

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2147' and  doctors_registration.office_id= '1' 
 Execution Time:0.0044898986816406

select fname,lname,mrdno from patient_registration where  patient_registration_id='2147' and  office_id= '1' 
 Execution Time:0.0037660598754883

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00073695182800293

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00073695182800293

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031399726867676

select * from ipdcharge where  ipdcharge_id=3  and office_id= 1 and status=1 
 Execution Time:0.00069189071655273

select * from ipdcharge where  ipdcharge_id=4  and office_id= 1 and status=1 
 Execution Time:0.00067496299743652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0079150199890137

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0079150199890137

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001183032989502

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0079150199890137

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001183032989502

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001662015914917

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0079150199890137

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001183032989502

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001662015914917

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0079150199890137

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001183032989502

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001662015914917

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024318695068359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024318695068359

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015928745269775

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024318695068359

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015928745269775

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0065810680389404

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024318695068359

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015928745269775

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0065810680389404

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060606002807617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024318695068359

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015928745269775

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0065810680389404

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060606002807617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004910945892334

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042328834533691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042328834533691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042328834533691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042328834533691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042328834533691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select count(*) as cnt from patient_registration where  patient_registration_id= '2534' and  office_id= '1' 
 Execution Time:0.0038430690765381

select count(*) as cnt from patient_registration where  patient_registration_id= '2534' and  office_id= '1' 
 Execution Time:0.0038430690765381

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2534' and  doctors_registration.office_id= '1' 
 Execution Time:0.0078408718109131

select count(*) as cnt from patient_registration where  patient_registration_id= '2534' and  office_id= '1' 
 Execution Time:0.0038430690765381

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2534' and  doctors_registration.office_id= '1' 
 Execution Time:0.0078408718109131

select fname,lname,mrdno from patient_registration where  patient_registration_id='2534' and  office_id= '1' 
 Execution Time:0.0025949478149414

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016410350799561

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016410350799561

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045895576477051

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0051839351654053

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0051839351654053

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052404403686523

select * from ipdcharge where  ipdcharge_id=2  and office_id= 1 and status=1 
 Execution Time:0.0036799907684326

select * from ipdcharge where  ipdcharge_id=3  and office_id= 1 and status=1 
 Execution Time:0.0035190582275391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0082859992980957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0082859992980957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0082859992980957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0082859992980957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.010416030883789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0082859992980957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.010416030883789

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021710395812988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021710395812988

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011630058288574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021710395812988

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011630058288574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045421123504639

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021710395812988

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011630058288574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045421123504639

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010859966278076

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021710395812988

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011630058288574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045421123504639

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010859966278076

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001924991607666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021710395812988

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011630058288574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045421123504639

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010859966278076

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001924991607666

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032491683959961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021710395812988

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011630058288574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045421123504639

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010859966278076

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001924991607666

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032491683959961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055248737335205

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072629451751709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072629451751709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072629451751709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072629451751709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0033938884735107

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072629451751709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0033938884735107

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015919208526611

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015919208526611

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035719871520996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015919208526611

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035719871520996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002424955368042

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015919208526611

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035719871520996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002424955368042

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013689994812012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015919208526611

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035719871520996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002424955368042

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013689994812012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014081001281738

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015919208526611

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035719871520996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002424955368042

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013689994812012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014081001281738

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039341449737549

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015919208526611

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035719871520996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002424955368042

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013689994812012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014081001281738

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039341449737549

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078606605529785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015919208526611

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035719871520996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002424955368042

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013689994812012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014081001281738

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039341449737549

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078606605529785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053269863128662

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063920021057129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063920021057129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039989948272705

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063920021057129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039989948272705

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0056788921356201

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063920021057129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039989948272705

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0056788921356201

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0077738761901855

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063920021057129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039989948272705

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0056788921356201

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0077738761901855

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0027971267700195

select count(*) as cnt from patient_registration where  patient_registration_id= '2344' and  office_id= '1' 
 Execution Time:0.0032448768615723

select count(*) as cnt from patient_registration where  patient_registration_id= '2344' and  office_id= '1' 
 Execution Time:0.0032448768615723

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2344' and  doctors_registration.office_id= '1' 
 Execution Time:0.0071151256561279

select count(*) as cnt from patient_registration where  patient_registration_id= '2344' and  office_id= '1' 
 Execution Time:0.0032448768615723

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2344' and  doctors_registration.office_id= '1' 
 Execution Time:0.0071151256561279

select fname,lname,mrdno from patient_registration where  patient_registration_id='2344' and  office_id= '1' 
 Execution Time:0.00052499771118164

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00095510482788086

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00095510482788086

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052189826965332

select * from ipdcharge where  ipdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.0055031776428223

select * from ipdcharge where  ipdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00070810317993164

select * from ipdcharge where  ipdcharge_id=7  and office_id= 1 and status=1 
 Execution Time:0.0031919479370117

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.0011699199676514

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.00074005126953125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059220790863037

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059220790863037

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035851001739502

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059220790863037

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035851001739502

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012509822845459

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059220790863037

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035851001739502

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012509822845459

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0017099380493164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059220790863037

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035851001739502

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012509822845459

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0017099380493164

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012199878692627

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012199878692627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064921379089355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012199878692627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064921379089355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012199878692627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064921379089355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012199878692627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064921379089355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030207633972168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012199878692627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064921379089355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030207633972168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012199878692627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064921379089355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030207633972168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00085997581481934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012199878692627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064921379089355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030207633972168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00085997581481934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036239624023438

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047802925109863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00502610206604

select count(*) as cnt from patient_registration where  patient_registration_id= '2462' and  office_id= '1' 
 Execution Time:0.00044608116149902

select count(*) as cnt from patient_registration where  patient_registration_id= '2462' and  office_id= '1' 
 Execution Time:0.00044608116149902

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2462' and  doctors_registration.office_id= '1' 
 Execution Time:0.0043230056762695

select count(*) as cnt from patient_registration where  patient_registration_id= '2462' and  office_id= '1' 
 Execution Time:0.00044608116149902

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2462' and  doctors_registration.office_id= '1' 
 Execution Time:0.0043230056762695

select fname,lname,mrdno from patient_registration where  patient_registration_id='2462' and  office_id= '1' 
 Execution Time:0.0015740394592285

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00041508674621582

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00041508674621582

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00042581558227539

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00076699256896973

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00076699256896973

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035810470581055

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012149810791016

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012149810791016

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0023558139801025

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075912475585938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075912475585938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075912475585938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010581016540527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075912475585938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010581016540527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00074982643127441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075912475585938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010581016540527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00074982643127441

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075912475585938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010581016540527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00074982643127441

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075912475585938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010581016540527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00074982643127441

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012941360473633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075912475585938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010581016540527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00074982643127441

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012941360473633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.008540153503418

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00063109397888184

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00063109397888184

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00029587745666504

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0040090084075928

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0040090084075928

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0052709579467773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050997734069824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063068866729736

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0028162002563477

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0028162002563477

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0027880668640137

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042486190795898

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042486190795898

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036907196044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014750957489014

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014750957489014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035359859466553

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014750957489014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035359859466553

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037720203399658

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014750957489014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035359859466553

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037720203399658

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038089752197266

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014750957489014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035359859466553

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037720203399658

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038089752197266

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037820339202881

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014750957489014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035359859466553

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037720203399658

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038089752197266

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037820339202881

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014750957489014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035359859466553

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037720203399658

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038089752197266

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037820339202881

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020229816436768

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014750957489014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035359859466553

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037720203399658

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038089752197266

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037820339202881

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020229816436768

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059840679168701

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00073003768920898

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00073003768920898

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0029351711273193

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.021980047225952

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.021980047225952

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.012811183929443

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0065212249755859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0065212249755859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028450489044189

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0065212249755859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028450489044189

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0065212249755859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028450489044189

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013580322265625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0065212249755859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028450489044189

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013580322265625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012350082397461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0065212249755859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028450489044189

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013580322265625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012350082397461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0065212249755859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028450489044189

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013580322265625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012350082397461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00097203254699707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0065212249755859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028450489044189

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013580322265625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012350082397461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00097203254699707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053360462188721

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055508613586426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055508613586426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055508613586426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055508613586426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055508613586426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select count(*) as cnt from patient_registration where  patient_registration_id= '2675' and  office_id= '1' 
 Execution Time:0.00073504447937012

select count(*) as cnt from patient_registration where  patient_registration_id= '2675' and  office_id= '1' 
 Execution Time:0.00073504447937012

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2675' and  doctors_registration.office_id= '1' 
 Execution Time:0.0043890476226807

select count(*) as cnt from patient_registration where  patient_registration_id= '2675' and  office_id= '1' 
 Execution Time:0.00073504447937012

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2675' and  doctors_registration.office_id= '1' 
 Execution Time:0.0043890476226807

select fname,lname,mrdno from patient_registration where  patient_registration_id='2675' and  office_id= '1' 
 Execution Time:0.002216100692749

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00086021423339844

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00086021423339844

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041913986206055

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.0017220973968506

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0007171630859375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032389163970947

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032389163970947

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032389163970947

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032389163970947

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00014686584472656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032389163970947

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00014686584472656

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058102607727051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058102607727051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058102607727051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069785118103027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058102607727051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069785118103027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037422180175781

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00048398971557617

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00048398971557617

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00029897689819336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011210441589355

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011210441589355

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012960433959961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026209354400635

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026209354400635

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026209354400635

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018668174743652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026209354400635

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018668174743652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030088424682617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026209354400635

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018668174743652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030088424682617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026209354400635

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018668174743652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030088424682617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026209354400635

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018668174743652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030088424682617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060820579528809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026209354400635

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018668174743652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030088424682617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060820579528809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068390369415283

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00065803527832031

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00065803527832031

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034999847412109

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045990943908691

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045990943908691

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029587745666504

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00069308280944824

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00069308280944824

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00044608116149902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059294700622559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059294700622559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052618980407715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059294700622559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052618980407715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039889812469482

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059294700622559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052618980407715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039889812469482

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001878023147583

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059294700622559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052618980407715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039889812469482

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001878023147583

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052900314331055

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005328893661499

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005328893661499

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00091814994812012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005328893661499

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00091814994812012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016529560089111

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005328893661499

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00091814994812012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016529560089111

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005328893661499

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00091814994812012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016529560089111

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select count(*) as cnt from patient_registration where  patient_registration_id= '2682' and  office_id= '1' 
 Execution Time:0.00064682960510254

select count(*) as cnt from patient_registration where  patient_registration_id= '2682' and  office_id= '1' 
 Execution Time:0.00064682960510254

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2682' and  doctors_registration.office_id= '1' 
 Execution Time:0.0090739727020264

select count(*) as cnt from patient_registration where  patient_registration_id= '2682' and  office_id= '1' 
 Execution Time:0.00064682960510254

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2682' and  doctors_registration.office_id= '1' 
 Execution Time:0.0090739727020264

select fname,lname,mrdno from patient_registration where  patient_registration_id='2682' and  office_id= '1' 
 Execution Time:0.0033810138702393

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003669261932373

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003669261932373

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00031590461730957

select * from investigation where  investigation_id=17  and office_id= 1 and status=1 
 Execution Time:0.00078797340393066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050969123840332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050969123840332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050969123840332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050969123840332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050969123840332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0018060207366943

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0018060207366943

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0037779808044434

select count(*) as cnt from billing_master where  billing_master_id= '423' and  office_id= '1' 
 Execution Time:0.00036883354187012

select count(*) as cnt from billing_master where  billing_master_id= '423' and  office_id= '1' 
 Execution Time:0.00036883354187012

select * from billing_master where  billing_master_id= '423' and  office_id= '1' 
 Execution Time:0.00029492378234863

select count(*) as cnt from billing_master where  billing_master_id= '423' and  office_id= '1' 
 Execution Time:0.00036883354187012

select * from billing_master where  billing_master_id= '423' and  office_id= '1' 
 Execution Time:0.00029492378234863

select * from billing_detail where  billing_master_id= '423' 
 Execution Time:0.0007479190826416

select count(*) as cnt from billing_master where  billing_master_id= '423' and  office_id= '1' 
 Execution Time:0.00036883354187012

select * from billing_master where  billing_master_id= '423' and  office_id= '1' 
 Execution Time:0.00029492378234863

select * from billing_detail where  billing_master_id= '423' 
 Execution Time:0.0007479190826416

select * from investigation where  investigation_id=17  and office_id= 1 and status=1 
 Execution Time:0.00052094459533691

select count(*) as cnt from patient_registration where  patient_registration_id= '2682' and  office_id= '1' 
 Execution Time:0.00045204162597656

select count(*) as cnt from patient_registration where  patient_registration_id= '2682' and  office_id= '1' 
 Execution Time:0.00045204162597656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2682' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024080276489258

select count(*) as cnt from patient_registration where  patient_registration_id= '2682' and  office_id= '1' 
 Execution Time:0.00045204162597656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2682' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024080276489258

select fname,lname,mrdno from patient_registration where  patient_registration_id='2682' and  office_id= '1' 
 Execution Time:0.00025486946105957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050411224365234

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050411224365234

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017321109771729

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050411224365234

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017321109771729

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050411224365234

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017321109771729

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050411224365234

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017321109771729

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026512145996094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026512145996094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026512145996094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026512145996094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001399040222168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026512145996094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001399040222168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052280426025391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036380290985107

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036380290985107

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036380290985107

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036380290985107

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036380290985107

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select count(*) as cnt from patient_registration where  patient_registration_id= '2543' and  office_id= '1' 
 Execution Time:0.00037789344787598

select count(*) as cnt from patient_registration where  patient_registration_id= '2543' and  office_id= '1' 
 Execution Time:0.00037789344787598

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2543' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024900436401367

select count(*) as cnt from patient_registration where  patient_registration_id= '2543' and  office_id= '1' 
 Execution Time:0.00037789344787598

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2543' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024900436401367

select fname,lname,mrdno from patient_registration where  patient_registration_id='2543' and  office_id= '1' 
 Execution Time:0.0002140998840332

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00089287757873535

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00089287757873535

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043582916259766

select * from ipdcharge where  ipdcharge_id=19  and office_id= 1 and status=1 
 Execution Time:0.0005338191986084

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051121711730957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051121711730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051121711730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051121711730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051121711730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00023818016052246

select count(*) as cnt from billing_master where  billing_master_id= '424' and  office_id= '1' 
 Execution Time:0.0044569969177246

select count(*) as cnt from billing_master where  billing_master_id= '424' and  office_id= '1' 
 Execution Time:0.0044569969177246

select * from billing_master where  billing_master_id= '424' and  office_id= '1' 
 Execution Time:0.0012609958648682

select count(*) as cnt from billing_master where  billing_master_id= '424' and  office_id= '1' 
 Execution Time:0.0044569969177246

select * from billing_master where  billing_master_id= '424' and  office_id= '1' 
 Execution Time:0.0012609958648682

select * from billing_detail where  billing_master_id= '424' 
 Execution Time:0.0010719299316406

select count(*) as cnt from billing_master where  billing_master_id= '424' and  office_id= '1' 
 Execution Time:0.0044569969177246

select * from billing_master where  billing_master_id= '424' and  office_id= '1' 
 Execution Time:0.0012609958648682

select * from billing_detail where  billing_master_id= '424' 
 Execution Time:0.0010719299316406

select * from ipdcharge where  ipdcharge_id=19  and office_id= 1 and status=1 
 Execution Time:0.00074291229248047

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0020360946655273

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0020360946655273

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0039010047912598

select count(*) as cnt from patient_registration where  patient_registration_id= '2543' and  office_id= '1' 
 Execution Time:0.00056290626525879

select count(*) as cnt from patient_registration where  patient_registration_id= '2543' and  office_id= '1' 
 Execution Time:0.00056290626525879

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2543' and  doctors_registration.office_id= '1' 
 Execution Time:0.0039172172546387

select count(*) as cnt from patient_registration where  patient_registration_id= '2543' and  office_id= '1' 
 Execution Time:0.00056290626525879

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2543' and  doctors_registration.office_id= '1' 
 Execution Time:0.0039172172546387

select fname,lname,mrdno from patient_registration where  patient_registration_id='2543' and  office_id= '1' 
 Execution Time:0.00028395652770996

select count(*) as cnt from patient_registration where  patient_registration_id= '2543' and  office_id= '1' 
 Execution Time:0.0032858848571777

select count(*) as cnt from patient_registration where  patient_registration_id= '2543' and  office_id= '1' 
 Execution Time:0.0032858848571777

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2543' and  doctors_registration.office_id= '1' 
 Execution Time:0.0059380531311035

select count(*) as cnt from patient_registration where  patient_registration_id= '2543' and  office_id= '1' 
 Execution Time:0.0032858848571777

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2543' and  doctors_registration.office_id= '1' 
 Execution Time:0.0059380531311035

select fname,lname,mrdno from patient_registration where  patient_registration_id='2543' and  office_id= '1' 
 Execution Time:0.0028002262115479

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060069561004639

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060069561004639

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060069561004639

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060069561004639

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060069561004639

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00148606300354

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00148606300354

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00148606300354

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00148606300354

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002281665802002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00148606300354

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002281665802002

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00148606300354

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002281665802002

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00148606300354

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002281665802002

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042915344238281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00148606300354

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002281665802002

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042915344238281

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053319931030273

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037789344787598

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037789344787598

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00031614303588867

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050806999206543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050806999206543

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004880428314209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042049884796143

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042049884796143

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042049884796143

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042049884796143

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042049884796143

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023293495178223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042049884796143

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023293495178223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042049884796143

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023293495178223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055980682373047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042049884796143

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023293495178223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055980682373047

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064260959625244

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00160813331604

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00160813331604

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0020620822906494

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038886070251465

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038886070251465

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0001988410949707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047779083251953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047779083251953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047779083251953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047779083251953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027608871459961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047779083251953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027608871459961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047779083251953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027608871459961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047779083251953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027608871459961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033688545227051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047779083251953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027608871459961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033688545227051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053329467773438

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0021469593048096

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0021469593048096

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00079011917114258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065207481384277

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065207481384277

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065708160400391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042707920074463

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042707920074463

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042707920074463

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007011890411377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042707920074463

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007011890411377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042707920074463

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007011890411377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012359619140625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042707920074463

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007011890411377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012359619140625

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068807601928711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042707920074463

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007011890411377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012359619140625

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068807601928711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051028728485107

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0011680126190186

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0011680126190186

select patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0028159618377686

select count(*) as cnt from patient_registration where  patient_registration_id= '826' and  office_id= '1' 
 Execution Time:0.00037598609924316

select count(*) as cnt from patient_registration where  patient_registration_id= '826' and  office_id= '1' 
 Execution Time:0.00037598609924316

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='826' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041899681091309

select count(*) as cnt from patient_registration where  patient_registration_id= '826' and  office_id= '1' 
 Execution Time:0.00037598609924316

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='826' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041899681091309

select fname,lname,mrdno from patient_registration where  patient_registration_id='826' and  office_id= '1' 
 Execution Time:0.00043606758117676

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057005882263184

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057005882263184

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030303001403809

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0019218921661377

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0019218921661377

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00098299980163574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077295303344727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077295303344727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077295303344727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077295303344727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077295303344727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005040168762207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061018466949463

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00084209442138672

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00084209442138672

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036501884460449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032908916473389

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032908916473389

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013020038604736

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069618225097656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069618225097656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069618225097656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069618225097656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012671947479248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069618225097656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012671947479248

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026988983154297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069618225097656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012671947479248

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026988983154297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015559196472168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069618225097656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012671947479248

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026988983154297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015559196472168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089907646179199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069618225097656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012671947479248

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026988983154297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015559196472168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089907646179199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058350563049316

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00076913833618164

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00076913833618164

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049090385437012

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0035989284515381

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0035989284515381

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0024878978729248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014009475708008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014009475708008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0029489994049072

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014009475708008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0029489994049072

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014009475708008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0029489994049072

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012328624725342

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014009475708008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0029489994049072

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012328624725342

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0047860145568848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014009475708008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0029489994049072

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012328624725342

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0047860145568848

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006742000579834

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00054001808166504

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00054001808166504

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00025010108947754

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055599212646484

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055599212646484

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044512748718262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037119388580322

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037119388580322

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034699440002441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037119388580322

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034699440002441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015850067138672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037119388580322

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034699440002441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015850067138672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034639835357666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037119388580322

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034699440002441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015850067138672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034639835357666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021178722381592

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037119388580322

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034699440002441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015850067138672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034639835357666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021178722381592

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010390281677246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037119388580322

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034699440002441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015850067138672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034639835357666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021178722381592

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010390281677246

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0042409896850586

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037119388580322

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034699440002441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015850067138672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034639835357666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021178722381592

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010390281677246

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0042409896850586

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049898624420166

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052659511566162

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052659511566162

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052659511566162

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.002669095993042

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052659511566162

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.002669095993042

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0036630630493164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052659511566162

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.002669095993042

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0036630630493164

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0014290809631348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011820793151855

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011820793151855

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011820793151855

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028011798858643

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011820793151855

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028011798858643

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001276969909668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011820793151855

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028011798858643

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001276969909668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011820793151855

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028011798858643

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001276969909668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018401145935059

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011820793151855

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028011798858643

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001276969909668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018401145935059

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016598701477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011820793151855

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028011798858643

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001276969909668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018401145935059

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016598701477051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078279972076416

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00086617469787598

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00086617469787598

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003960132598877

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00067901611328125

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00067901611328125

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00025391578674316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005500316619873

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005500316619873

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037908554077148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033020973205566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033020973205566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033020973205566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088715553283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033020973205566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088715553283691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060760974884033

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041604042053223

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041604042053223

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033402442932129

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044798851013184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044798851013184

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029182434082031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070691108703613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070691108703613

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070691108703613

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070691108703613

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060701370239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070691108703613

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060701370239258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063109397888184

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0029118061065674

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0029118061065674

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00036311149597168

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010759830474854

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010759830474854

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0034799575805664

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00043702125549316

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00043702125549316

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00031399726867676

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052118301391602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052118301391602

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021078586578369

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021078586578369

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021078586578369

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021078586578369

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021078586578369

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045299530029297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021078586578369

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045299530029297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021078586578369

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045299530029297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051498413085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021078586578369

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045299530029297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051498413085938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032279491424561

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052905082702637

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052905082702637

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00024318695068359

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037503242492676

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037503242492676

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00027704238891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011889934539795

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011889934539795

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011889934539795

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021491050720215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011889934539795

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021491050720215

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012249946594238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011889934539795

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021491050720215

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012249946594238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020351409912109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011889934539795

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021491050720215

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012249946594238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020351409912109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014588832855225

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011889934539795

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021491050720215

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012249946594238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020351409912109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014588832855225

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087285041809082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011889934539795

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021491050720215

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012249946594238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020351409912109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014588832855225

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087285041809082

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063049793243408

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0004119873046875

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0004119873046875

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00032806396484375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053596496582031

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053596496582031

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013530254364014

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029897689819336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018110275268555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029897689819336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018110275268555

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029897689819336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018110275268555

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046396255493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029897689819336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018110275268555

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046396255493164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004298210144043

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010848045349121

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010848045349121

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038480758666992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036716461181641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036716461181641

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073180198669434

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0019991397857666

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0019991397857666

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0039029121398926

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037002563476562

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037002563476562

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012750625610352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012750625610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012750625610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020849704742432

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012750625610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020849704742432

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024669170379639

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012750625610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020849704742432

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024669170379639

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038440227508545

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012750625610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020849704742432

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024669170379639

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038440227508545

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032238960266113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012750625610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020849704742432

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024669170379639

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038440227508545

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032238960266113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003331184387207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012750625610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020849704742432

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024669170379639

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038440227508545

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032238960266113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003331184387207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061368942260742

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00042295455932617

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00042295455932617

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050592422485352

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0073490142822266

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0073490142822266

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0079410076141357

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033900737762451

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033900737762451

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033900737762451

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038800239562988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033900737762451

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038800239562988

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033900737762451

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038800239562988

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032138824462891

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033900737762451

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038800239562988

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032138824462891

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021288394927979

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033900737762451

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038800239562988

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032138824462891

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021288394927979

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011818408966064

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033900737762451

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038800239562988

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032138824462891

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021288394927979

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011818408966064

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054569244384766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032851696014404

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032851696014404

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032851696014404

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032851696014404

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032851696014404

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043380260467529

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043380260467529

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016648769378662

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043380260467529

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016648769378662

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0074031352996826

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043380260467529

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016648769378662

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0074031352996826

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022668838500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043380260467529

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016648769378662

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0074031352996826

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022668838500977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033919811248779

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043380260467529

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016648769378662

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0074031352996826

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022668838500977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033919811248779

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038280487060547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043380260467529

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016648769378662

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0074031352996826

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022668838500977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033919811248779

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038280487060547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037620067596436

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043380260467529

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016648769378662

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0074031352996826

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022668838500977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033919811248779

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038280487060547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037620067596436

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006666898727417

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003093957901001

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003093957901001

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003093957901001

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003093957901001

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003093957901001

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select count(*) as cnt from patient_registration where  patient_registration_id= '2695' and  office_id= '1' 
 Execution Time:0.00048017501831055

select count(*) as cnt from patient_registration where  patient_registration_id= '2695' and  office_id= '1' 
 Execution Time:0.00048017501831055

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2695' and  doctors_registration.office_id= '1' 
 Execution Time:0.0043179988861084

select count(*) as cnt from patient_registration where  patient_registration_id= '2695' and  office_id= '1' 
 Execution Time:0.00048017501831055

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2695' and  doctors_registration.office_id= '1' 
 Execution Time:0.0043179988861084

select fname,lname,mrdno from patient_registration where  patient_registration_id='2695' and  office_id= '1' 
 Execution Time:0.0003669261932373

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0017321109771729

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0017321109771729

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00031900405883789

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00064492225646973

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00078988075256348

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053410530090332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053410530090332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053410530090332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053410530090332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053410530090332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041289329528809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041289329528809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041289329528809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041289329528809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041289329528809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029516220092773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029516220092773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029516220092773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029516220092773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029516220092773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036501884460449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034101009368896

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0017271041870117

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0017271041870117

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0029349327087402

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0031261444091797

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0031261444091797

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.003277063369751

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021800994873047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021800994873047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036599636077881

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021800994873047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036599636077881

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021800994873047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036599636077881

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037679672241211

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021800994873047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036599636077881

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037679672241211

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021800994873047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036599636077881

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037679672241211

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004755973815918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021800994873047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036599636077881

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037679672241211

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004755973815918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023519992828369

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021800994873047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036599636077881

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037679672241211

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004755973815918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023519992828369

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057229995727539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040419101715088

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040419101715088

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027680397033691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040419101715088

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027680397033691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012710094451904

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040419101715088

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027680397033691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012710094451904

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040419101715088

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027680397033691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012710094451904

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011160373687744

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040419101715088

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027680397033691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012710094451904

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011160373687744

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066738128662109

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0091919898986816

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0091919898986816

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.005767822265625

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012919902801514

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012919902801514

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00088596343994141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032305717468262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032305717468262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032305717468262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069618225097656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032305717468262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069618225097656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053079128265381

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063204765319824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063204765319824

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0009610652923584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036215782165527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036215782165527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036215782165527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036215782165527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041985511779785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036215782165527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041985511779785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0084719657897949

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00072908401489258

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00072908401489258

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00042510032653809

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.004148006439209

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.004148006439209

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061798095703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049519538879395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049519538879395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049519538879395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049519538879395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038313865661621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049519538879395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038313865661621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049519538879395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038313865661621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049519538879395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038313865661621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001039981842041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049519538879395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038313865661621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001039981842041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0099680423736572

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004410982131958

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004410982131958

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019710063934326

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004410982131958

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019710063934326

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013148784637451

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004410982131958

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019710063934326

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013148784637451

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037508010864258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004410982131958

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019710063934326

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013148784637451

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037508010864258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031750202178955

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004410982131958

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019710063934326

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013148784637451

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037508010864258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031750202178955

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037291049957275

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004410982131958

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019710063934326

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013148784637451

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037508010864258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031750202178955

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037291049957275

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087380409240723

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0036518573760986

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0036518573760986

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0045030117034912

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043201446533203

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043201446533203

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023112297058105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023112297058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0073959827423096

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023112297058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0073959827423096

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043430328369141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023112297058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0073959827423096

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043430328369141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00085997581481934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023112297058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0073959827423096

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043430328369141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00085997581481934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0050759315490723

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023112297058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0073959827423096

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043430328369141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00085997581481934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0050759315490723

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023112297058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0073959827423096

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043430328369141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00085997581481934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0050759315490723

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022258758544922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023112297058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0073959827423096

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043430328369141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00085997581481934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0050759315490723

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022258758544922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0082430839538574

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055789947509766

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055789947509766

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0002140998840332

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066208839416504

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066208839416504

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00301194190979

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00301194190979

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00301194190979

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024740695953369

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00301194190979

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024740695953369

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021300315856934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00301194190979

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024740695953369

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021300315856934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010321140289307

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00301194190979

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024740695953369

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021300315856934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010321140289307

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020849704742432

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00301194190979

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024740695953369

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021300315856934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010321140289307

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020849704742432

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020999908447266

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00301194190979

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024740695953369

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021300315856934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010321140289307

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020849704742432

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020999908447266

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063238143920898

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0031771659851074

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0031771659851074

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0014700889587402

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032997131347656

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032997131347656

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0025169849395752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010788440704346

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010788440704346

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028808116912842

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010788440704346

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028808116912842

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0009148120880127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010788440704346

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028808116912842

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0009148120880127

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082516670227051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010788440704346

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028808116912842

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0009148120880127

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082516670227051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014331340789795

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010788440704346

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028808116912842

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0009148120880127

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082516670227051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014331340789795

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010788440704346

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028808116912842

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0009148120880127

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082516670227051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014331340789795

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0096490383148193

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010788440704346

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028808116912842

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0009148120880127

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082516670227051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014331340789795

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0096490383148193

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072700977325439

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006854772567749

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006854772567749

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010659694671631

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006854772567749

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010659694671631

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0042808055877686

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006854772567749

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010659694671631

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0042808055877686

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0033929347991943

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006854772567749

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010659694671631

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0042808055877686

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0033929347991943

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0029661655426025

select count(*) as cnt from billing_master where  billing_master_id= '425' and  office_id= '1' 
 Execution Time:0.00067520141601562

select count(*) as cnt from billing_master where  billing_master_id= '425' and  office_id= '1' 
 Execution Time:0.00067520141601562

select * from billing_master where  billing_master_id= '425' and  office_id= '1' 
 Execution Time:0.00042295455932617

select count(*) as cnt from billing_master where  billing_master_id= '425' and  office_id= '1' 
 Execution Time:0.00067520141601562

select * from billing_master where  billing_master_id= '425' and  office_id= '1' 
 Execution Time:0.00042295455932617

select * from billing_detail where  billing_master_id= '425' 
 Execution Time:0.0018520355224609

select count(*) as cnt from billing_master where  billing_master_id= '425' and  office_id= '1' 
 Execution Time:0.00067520141601562

select * from billing_master where  billing_master_id= '425' and  office_id= '1' 
 Execution Time:0.00042295455932617

select * from billing_detail where  billing_master_id= '425' 
 Execution Time:0.0018520355224609

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.0010778903961182

select count(*) as cnt from billing_master where  billing_master_id= '425' and  office_id= '1' 
 Execution Time:0.00067520141601562

select * from billing_master where  billing_master_id= '425' and  office_id= '1' 
 Execution Time:0.00042295455932617

select * from billing_detail where  billing_master_id= '425' 
 Execution Time:0.0018520355224609

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.0010778903961182

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00024008750915527

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0018000602722168

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0018000602722168

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0038599967956543

select count(*) as cnt from patient_registration where  patient_registration_id= '2695' and  office_id= '1' 
 Execution Time:0.0022618770599365

select count(*) as cnt from patient_registration where  patient_registration_id= '2695' and  office_id= '1' 
 Execution Time:0.0022618770599365

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2695' and  doctors_registration.office_id= '1' 
 Execution Time:0.0065188407897949

select count(*) as cnt from patient_registration where  patient_registration_id= '2695' and  office_id= '1' 
 Execution Time:0.0022618770599365

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2695' and  doctors_registration.office_id= '1' 
 Execution Time:0.0065188407897949

select fname,lname,mrdno from patient_registration where  patient_registration_id='2695' and  office_id= '1' 
 Execution Time:0.00053191184997559

select count(*) as cnt from billing_master where  billing_master_id= '425' and  office_id= '1' 
 Execution Time:0.00037908554077148

select count(*) as cnt from billing_master where  billing_master_id= '425' and  office_id= '1' 
 Execution Time:0.00037908554077148

select * from billing_master where  billing_master_id= '425' and  office_id= '1' 
 Execution Time:0.00040793418884277

select count(*) as cnt from billing_master where  billing_master_id= '425' and  office_id= '1' 
 Execution Time:0.00037908554077148

select * from billing_master where  billing_master_id= '425' and  office_id= '1' 
 Execution Time:0.00040793418884277

select * from billing_detail where  billing_master_id= '425' 
 Execution Time:0.00092411041259766

select count(*) as cnt from billing_master where  billing_master_id= '425' and  office_id= '1' 
 Execution Time:0.00037908554077148

select * from billing_master where  billing_master_id= '425' and  office_id= '1' 
 Execution Time:0.00040793418884277

select * from billing_detail where  billing_master_id= '425' 
 Execution Time:0.00092411041259766

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00038790702819824

select count(*) as cnt from billing_master where  billing_master_id= '425' and  office_id= '1' 
 Execution Time:0.00037908554077148

select * from billing_master where  billing_master_id= '425' and  office_id= '1' 
 Execution Time:0.00040793418884277

select * from billing_detail where  billing_master_id= '425' 
 Execution Time:0.00092411041259766

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00038790702819824

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00029087066650391

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0011920928955078

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0011920928955078

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0044410228729248

select count(*) as cnt from patient_registration where  patient_registration_id= '2695' and  office_id= '1' 
 Execution Time:0.00033402442932129

select count(*) as cnt from patient_registration where  patient_registration_id= '2695' and  office_id= '1' 
 Execution Time:0.00033402442932129

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2695' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024681091308594

select count(*) as cnt from patient_registration where  patient_registration_id= '2695' and  office_id= '1' 
 Execution Time:0.00033402442932129

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2695' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024681091308594

select fname,lname,mrdno from patient_registration where  patient_registration_id='2695' and  office_id= '1' 
 Execution Time:0.00024986267089844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045394897460938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045394897460938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045394897460938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036287307739258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045394897460938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036287307739258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036060810089111

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032901763916016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032901763916016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032901763916016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049591064453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032901763916016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049591064453125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033619403839111

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049185752868652

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049185752868652

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029182434082031

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015909671783447

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015909671783447

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025010108947754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022315979003906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022315979003906

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022315979003906

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023078918457031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022315979003906

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023078918457031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022315979003906

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023078918457031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004270076751709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052850246429443

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0017721652984619

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0017721652984619

select patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0040638446807861

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003809928894043

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003809928894043

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029087066650391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010769367218018

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010769367218018

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044012069702148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021450519561768

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021450519561768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021450519561768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021450519561768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041413307189941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021450519561768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041413307189941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021450519561768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041413307189941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021450519561768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041413307189941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053000450134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021450519561768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041413307189941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053000450134277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050938129425049

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035905838012695

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035905838012695

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020079612731934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020079612731934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020079612731934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020079612731934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039982795715332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020079612731934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039982795715332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049960613250732

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038814544677734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038814544677734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038814544677734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013589859008789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038814544677734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013589859008789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005791187286377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038814544677734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013589859008789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005791187286377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003046989440918

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029206275939941

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029206275939941

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00023889541625977

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00074195861816406

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00074195861816406

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003809928894043

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013148784637451

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013148784637451

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057888031005859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024738311767578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024738311767578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024738311767578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00081706047058105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024738311767578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00081706047058105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013561248779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024738311767578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00081706047058105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013561248779297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00092816352844238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024738311767578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00081706047058105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013561248779297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00092816352844238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024738311767578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00081706047058105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013561248779297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00092816352844238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042200088500977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051348209381104

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033020973205566

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033020973205566

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033152103424072

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015180110931396

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015180110931396

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0067172050476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015180110931396

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0067172050476074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043349266052246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015180110931396

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0067172050476074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043349266052246

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037219524383545

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015180110931396

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0067172050476074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043349266052246

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037219524383545

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0056991577148438

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015180110931396

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0067172050476074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043349266052246

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037219524383545

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0056991577148438

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011038780212402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015180110931396

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0067172050476074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043349266052246

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037219524383545

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0056991577148438

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011038780212402

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0093119144439697

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015180110931396

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0067172050476074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043349266052246

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037219524383545

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0056991577148438

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011038780212402

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0093119144439697

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059370994567871

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00199294090271

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00199294090271

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034499168395996

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056314468383789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056314468383789

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001168966293335

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001168966293335

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042390823364258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001168966293335

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042390823364258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001168966293335

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042390823364258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001168966293335

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042390823364258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080609321594238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001168966293335

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042390823364258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080609321594238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053460597991943

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0044701099395752

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0044701099395752

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0037949085235596

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097107887268066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097107887268066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069379806518555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097107887268066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069379806518555

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023078918457031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097107887268066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069379806518555

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023078918457031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097107887268066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069379806518555

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023078918457031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020599365234375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097107887268066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069379806518555

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023078918457031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020599365234375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018215179443359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097107887268066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069379806518555

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023078918457031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020599365234375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018215179443359

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060296058654785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097107887268066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069379806518555

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023078918457031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020599365234375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018215179443359

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060296058654785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034689903259277

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037598609924316

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037598609924316

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0011768341064453

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051283836364746

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051283836364746

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042104721069336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010478496551514

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010478496551514

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016160011291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010478496551514

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016160011291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018539428710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010478496551514

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016160011291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018539428710938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010478496551514

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016160011291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018539428710938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010478496551514

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016160011291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018539428710938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048995018005371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010478496551514

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016160011291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018539428710938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048995018005371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068340301513672

select count(*) as cnt from patient_registration where  patient_registration_id= '2486' and  office_id= '1' 
 Execution Time:0.0011320114135742

select count(*) as cnt from patient_registration where  patient_registration_id= '2486' and  office_id= '1' 
 Execution Time:0.0011320114135742

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2486' and  doctors_registration.office_id= '1' 
 Execution Time:0.0043201446533203

select count(*) as cnt from patient_registration where  patient_registration_id= '2486' and  office_id= '1' 
 Execution Time:0.0011320114135742

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2486' and  doctors_registration.office_id= '1' 
 Execution Time:0.0043201446533203

select fname,lname,mrdno from patient_registration where  patient_registration_id='2486' and  office_id= '1' 
 Execution Time:0.00039005279541016

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038695335388184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038695335388184

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028300285339355

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00053691864013672

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00053691864013672

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00036382675170898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060369968414307

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060369968414307

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.012664079666138

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060369968414307

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.012664079666138

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0039768218994141

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060369968414307

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.012664079666138

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0039768218994141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0032789707183838

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060369968414307

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.012664079666138

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0039768218994141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0032789707183838

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00098490715026855

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078296661376953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078296661376953

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004802942276001

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073328018188477

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073328018188477

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038881301879883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073328018188477

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038881301879883

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0038599967956543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073328018188477

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038881301879883

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00093793869018555

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073328018188477

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038881301879883

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00093793869018555

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0036489963531494

select count(*) as cnt from patient_registration where  patient_registration_id= '2486' and  office_id= '1' 
 Execution Time:0.00040388107299805

select count(*) as cnt from patient_registration where  patient_registration_id= '2486' and  office_id= '1' 
 Execution Time:0.00040388107299805

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2486' and  doctors_registration.office_id= '1' 
 Execution Time:0.015981912612915

select count(*) as cnt from patient_registration where  patient_registration_id= '2486' and  office_id= '1' 
 Execution Time:0.00040388107299805

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2486' and  doctors_registration.office_id= '1' 
 Execution Time:0.015981912612915

select fname,lname,mrdno from patient_registration where  patient_registration_id='2486' and  office_id= '1' 
 Execution Time:0.0037028789520264

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069713592529297

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069713592529297

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048708915710449

select * from investigation where  investigation_id=11  and office_id= 1 and status=1 
 Execution Time:0.00094294548034668

select * from investigation where  investigation_id=15  and office_id= 1 and status=1 
 Execution Time:0.0007021427154541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00795578956604

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00795578956604

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00795578956604

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038480758666992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00795578956604

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038480758666992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00063180923461914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00795578956604

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038480758666992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00063180923461914

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.000518798828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.000518798828125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.000518798828125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.000518798828125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057697296142578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.000518798828125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057697296142578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058989524841309

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0013339519500732

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0013339519500732

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039100646972656

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071406364440918

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071406364440918

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00021195411682129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095009803771973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095009803771973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012550354003906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095009803771973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012550354003906

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095009803771973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012550354003906

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095009803771973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012550354003906

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045394897460938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095009803771973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012550354003906

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045394897460938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095009803771973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012550354003906

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045394897460938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025398731231689

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095009803771973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012550354003906

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045394897460938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025398731231689

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006443977355957

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035405158996582

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035405158996582

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00021886825561523

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00089311599731445

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00089311599731445

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037908554077148

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049996376037598

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049996376037598

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0091209411621094

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005040168762207

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005040168762207

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033283233642578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0083389282226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0083389282226562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034000873565674

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0083389282226562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034000873565674

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0083389282226562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034000873565674

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0083389282226562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034000873565674

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0083389282226562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034000873565674

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0083389282226562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034000873565674

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070786476135254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0083389282226562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034000873565674

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070786476135254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038819313049316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034561157226562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034561157226562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034561157226562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034561157226562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034561157226562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select count(*) as cnt from billing_master where  billing_master_id= '424' and  office_id= '1' 
 Execution Time:0.00052094459533691

select count(*) as cnt from billing_master where  billing_master_id= '424' and  office_id= '1' 
 Execution Time:0.00052094459533691

select * from billing_master where  billing_master_id= '424' and  office_id= '1' 
 Execution Time:0.00033187866210938

select count(*) as cnt from billing_master where  billing_master_id= '424' and  office_id= '1' 
 Execution Time:0.00052094459533691

select * from billing_master where  billing_master_id= '424' and  office_id= '1' 
 Execution Time:0.00033187866210938

select * from billing_detail where  billing_master_id= '424' 
 Execution Time:0.00064492225646973

select count(*) as cnt from billing_master where  billing_master_id= '424' and  office_id= '1' 
 Execution Time:0.00052094459533691

select * from billing_master where  billing_master_id= '424' and  office_id= '1' 
 Execution Time:0.00033187866210938

select * from billing_detail where  billing_master_id= '424' 
 Execution Time:0.00064492225646973

select * from ipdcharge where  ipdcharge_id=19  and office_id= 1 and status=1 
 Execution Time:0.0018069744110107

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0026059150695801

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0026059150695801

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0037479400634766

select count(*) as cnt from patient_registration where  patient_registration_id= '2543' and  office_id= '1' 
 Execution Time:0.00043702125549316

select count(*) as cnt from patient_registration where  patient_registration_id= '2543' and  office_id= '1' 
 Execution Time:0.00043702125549316

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2543' and  doctors_registration.office_id= '1' 
 Execution Time:0.004101037979126

select count(*) as cnt from patient_registration where  patient_registration_id= '2543' and  office_id= '1' 
 Execution Time:0.00043702125549316

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2543' and  doctors_registration.office_id= '1' 
 Execution Time:0.004101037979126

select fname,lname,mrdno from patient_registration where  patient_registration_id='2543' and  office_id= '1' 
 Execution Time:0.00037407875061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035977363586426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035977363586426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001671314239502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035977363586426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001671314239502

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006861686706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035977363586426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001671314239502

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006861686706543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034959316253662

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037448406219482

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037448406219482

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037448406219482

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037448406219482

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037448406219482

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select count(*) as cnt from billing_master where  billing_master_id= '425' and  office_id= '1' 
 Execution Time:0.00046205520629883

select count(*) as cnt from billing_master where  billing_master_id= '425' and  office_id= '1' 
 Execution Time:0.00046205520629883

select * from billing_master where  billing_master_id= '425' and  office_id= '1' 
 Execution Time:0.00037813186645508

select count(*) as cnt from billing_master where  billing_master_id= '425' and  office_id= '1' 
 Execution Time:0.00046205520629883

select * from billing_master where  billing_master_id= '425' and  office_id= '1' 
 Execution Time:0.00037813186645508

select * from billing_detail where  billing_master_id= '425' 
 Execution Time:0.00077295303344727

select count(*) as cnt from billing_master where  billing_master_id= '425' and  office_id= '1' 
 Execution Time:0.00046205520629883

select * from billing_master where  billing_master_id= '425' and  office_id= '1' 
 Execution Time:0.00037813186645508

select * from billing_detail where  billing_master_id= '425' 
 Execution Time:0.00077295303344727

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00033998489379883

select count(*) as cnt from billing_master where  billing_master_id= '425' and  office_id= '1' 
 Execution Time:0.00046205520629883

select * from billing_master where  billing_master_id= '425' and  office_id= '1' 
 Execution Time:0.00037813186645508

select * from billing_detail where  billing_master_id= '425' 
 Execution Time:0.00077295303344727

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00033998489379883

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00030899047851562

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0021071434020996

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0021071434020996

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0055301189422607

select count(*) as cnt from patient_registration where  patient_registration_id= '2695' and  office_id= '1' 
 Execution Time:0.0004270076751709

select count(*) as cnt from patient_registration where  patient_registration_id= '2695' and  office_id= '1' 
 Execution Time:0.0004270076751709

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2695' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033819675445557

select count(*) as cnt from patient_registration where  patient_registration_id= '2695' and  office_id= '1' 
 Execution Time:0.0004270076751709

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2695' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033819675445557

select fname,lname,mrdno from patient_registration where  patient_registration_id='2695' and  office_id= '1' 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013899803161621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013899803161621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013518333435059

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013899803161621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013518333435059

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013899803161621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013518333435059

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013899803161621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013518333435059

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034499168395996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028109550476074

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00061297416687012

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00061297416687012

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00028610229492188

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00050711631774902

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00050711631774902

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00039196014404297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005958080291748

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005958080291748

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032410621643066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057697296142578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057697296142578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020289421081543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057697296142578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020289421081543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087904930114746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057697296142578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020289421081543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087904930114746

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064206123352051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057697296142578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020289421081543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087904930114746

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064206123352051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049519538879395

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0048880577087402

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0048880577087402

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0036971569061279

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00028896331787109

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00028896331787109

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0002131462097168

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0005340576171875

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0005340576171875

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056099891662598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056099891662598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056099891662598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056099891662598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056910514831543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056099891662598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056910514831543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040428638458252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014040470123291

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014040470123291

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017530918121338

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014040470123291

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017530918121338

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027589797973633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014040470123291

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017530918121338

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027589797973633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014040470123291

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017530918121338

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027589797973633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014040470123291

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017530918121338

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027589797973633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010149478912354

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014040470123291

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017530918121338

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027589797973633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010149478912354

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056438446044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054287910461426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054287910461426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054287910461426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054287910461426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006868839263916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054287910461426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006868839263916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049929618835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036787986755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036787986755371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053567886352539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034470558166504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034470558166504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034470558166504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034470558166504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034470558166504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035879611968994

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035879611968994

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035879611968994

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035879611968994

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035879611968994

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select count(*) as cnt from patient_registration where  patient_registration_id= '2710' and  office_id= '1' 
 Execution Time:0.00049495697021484

select count(*) as cnt from patient_registration where  patient_registration_id= '2710' and  office_id= '1' 
 Execution Time:0.00049495697021484

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2710' and  doctors_registration.office_id= '1' 
 Execution Time:0.0043258666992188

select count(*) as cnt from patient_registration where  patient_registration_id= '2710' and  office_id= '1' 
 Execution Time:0.00049495697021484

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2710' and  doctors_registration.office_id= '1' 
 Execution Time:0.0043258666992188

select fname,lname,mrdno from patient_registration where  patient_registration_id='2710' and  office_id= '1' 
 Execution Time:0.00038886070251465

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00063204765319824

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00063204765319824

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048398971557617

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00046586990356445

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00045585632324219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053689479827881

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053689479827881

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026710033416748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053689479827881

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026710033416748

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035951137542725

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053689479827881

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026710033416748

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035951137542725

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037851333618164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053689479827881

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026710033416748

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035951137542725

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037851333618164

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0038149356842041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029897689819336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029897689819336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029897689819336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078892707824707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029897689819336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078892707824707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055928230285645

select count(*) as cnt from patient_registration where  patient_registration_id= '1760' and  office_id= '1' 
 Execution Time:0.00045299530029297

select count(*) as cnt from patient_registration where  patient_registration_id= '1760' and  office_id= '1' 
 Execution Time:0.00045299530029297

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1760' and  doctors_registration.office_id= '1' 
 Execution Time:0.0043809413909912

select count(*) as cnt from patient_registration where  patient_registration_id= '1760' and  office_id= '1' 
 Execution Time:0.00045299530029297

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1760' and  doctors_registration.office_id= '1' 
 Execution Time:0.0043809413909912

select fname,lname,mrdno from patient_registration where  patient_registration_id='1760' and  office_id= '1' 
 Execution Time:0.00033998489379883

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042986869812012

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042986869812012

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037002563476562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035929679870605

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035929679870605

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035929679870605

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035929679870605

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035929679870605

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0052511692047119

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0052511692047119

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020577907562256

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0052511692047119

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020577907562256

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0052511692047119

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020577907562256

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075697898864746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0052511692047119

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020577907562256

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075697898864746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055971145629883

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00046014785766602

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00046014785766602

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029206275939941

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0042078495025635

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0042078495025635

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016288757324219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016288757324219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016288757324219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016288757324219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016288757324219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016288757324219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016288757324219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017809867858887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016288757324219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017809867858887

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035040378570557

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00064301490783691

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00064301490783691

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00080990791320801

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049686431884766

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049686431884766

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046706199645996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046706199645996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060710906982422

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060415267944336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060415267944336

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033307075500488

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012660026550293

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012660026550293

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004417896270752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004417896270752

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004417896270752

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004417896270752

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080704689025879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004417896270752

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080704689025879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044460296630859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036659240722656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036659240722656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036659240722656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012829303741455

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036659240722656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012829303741455

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0010881423950195

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-20' and  '2021-11-20' and  billing_master.office_id= 1        
 Execution Time:0.0021378993988037

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-20' and  '2021-11-20' and  billing_master.office_id= 1        
 Execution Time:0.0021378993988037

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-11-20' and '2021-11-20' and  patient_registration.office_id= 1      
 Execution Time:0.0056211948394775

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0058078765869141

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0030291080474854

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0058078765869141

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0030291080474854

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0078179836273193

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0058078765869141

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0030291080474854

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0078179836273193

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00032901763916016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.0047130584716797

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.003835916519165

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.0059370994567871

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.0038931369781494

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.0047130584716797

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.003835916519165

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.0059370994567871

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.0038931369781494

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0064349174499512

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.0047130584716797

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.003835916519165

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.0059370994567871

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.0038931369781494

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0064349174499512

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.0022099018096924

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0017321109771729

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0017321109771729

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0035250186920166

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013859272003174

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0019049644470215

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013859272003174

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0019049644470215

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013859272003174

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0019049644470215

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00047111511230469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.0014829635620117

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.00061607360839844

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00039315223693848

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.0014829635620117

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.00061607360839844

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00039315223693848

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00066184997558594

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.0014829635620117

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.00061607360839844

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00039315223693848

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00066184997558594

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.0003049373626709

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00062203407287598

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00062203407287598

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033998489379883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010650157928467

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010650157928467

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010650157928467

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00056910514831543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0073361396789551

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0073361396789551

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0038769245147705

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.0032610893249512

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018689632415771

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.003931999206543

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.0030369758605957

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.0032610893249512

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018689632415771

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.003931999206543

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.0030369758605957

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.012240886688232

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.0032610893249512

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018689632415771

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.003931999206543

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.0030369758605957

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.012240886688232

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.0041508674621582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0024280548095703

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0017421245574951

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0024280548095703

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0017421245574951

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0027620792388916

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0024280548095703

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0017421245574951

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0027620792388916

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00068211555480957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.010036945343018

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.0057950019836426

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.004925012588501

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.0029940605163574

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.0020179748535156

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.0057950019836426

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.004925012588501

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.0029940605163574

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.0020179748535156

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00070405006408691

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.0057950019836426

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.004925012588501

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.0029940605163574

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.0020179748535156

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00070405006408691

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.0018761157989502

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0020210742950439

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0020210742950439

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0018160343170166

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089693069458008

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089693069458008

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089693069458008

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00051403045654297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00089693069458008

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00089693069458008

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0033440589904785

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.0025148391723633

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.00066089630126953

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.0014591217041016

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.0025148391723633

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.00066089630126953

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.0014591217041016

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00077390670776367

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.0025148391723633

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.00066089630126953

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.0014591217041016

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00077390670776367

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00028085708618164


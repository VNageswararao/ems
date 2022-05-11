select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010411977767944

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010411977767944

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010171175003052

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010411977767944

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010171175003052

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0078558921813965

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010411977767944

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010171175003052

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0078558921813965

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024688243865967

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010411977767944

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010171175003052

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0078558921813965

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024688243865967

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020749568939209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010411977767944

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010171175003052

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0078558921813965

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024688243865967

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020749568939209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010411977767944

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010171175003052

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0078558921813965

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024688243865967

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020749568939209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027201175689697

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010411977767944

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010171175003052

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0078558921813965

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024688243865967

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020749568939209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027201175689697

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023679733276367

select count(*) as cnt from patient_registration where  patient_registration_id= '1818' and  office_id= '1' 
 Execution Time:0.00042104721069336

select count(*) as cnt from patient_registration where  patient_registration_id= '1818' and  office_id= '1' 
 Execution Time:0.00042104721069336

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1818' and  doctors_registration.office_id= '1' 
 Execution Time:0.0017290115356445

select count(*) as cnt from patient_registration where  patient_registration_id= '1818' and  office_id= '1' 
 Execution Time:0.00042104721069336

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1818' and  doctors_registration.office_id= '1' 
 Execution Time:0.0017290115356445

select fname,lname,mrdno from patient_registration where  patient_registration_id='1818' and  office_id= '1' 
 Execution Time:0.00020813941955566

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068902969360352

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068902969360352

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003809928894043

select count(*) as cnt from patient_registration where  patient_registration_id= '250' and  office_id= '1' 
 Execution Time:0.00080990791320801

select count(*) as cnt from patient_registration where  patient_registration_id= '250' and  office_id= '1' 
 Execution Time:0.00080990791320801

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='250' and  doctors_registration.office_id= '1' 
 Execution Time:0.001910924911499

select count(*) as cnt from patient_registration where  patient_registration_id= '250' and  office_id= '1' 
 Execution Time:0.00080990791320801

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='250' and  doctors_registration.office_id= '1' 
 Execution Time:0.001910924911499

select fname,lname,mrdno from patient_registration where  patient_registration_id='250' and  office_id= '1' 
 Execution Time:0.0049700736999512

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0021820068359375

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0021820068359375

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0023429393768311

select count(*) as cnt from patient_registration where  patient_registration_id= '1775' and  office_id= '1' 
 Execution Time:0.00048995018005371

select count(*) as cnt from patient_registration where  patient_registration_id= '1775' and  office_id= '1' 
 Execution Time:0.00048995018005371

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1775' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030179023742676

select count(*) as cnt from patient_registration where  patient_registration_id= '1775' and  office_id= '1' 
 Execution Time:0.00048995018005371

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1775' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030179023742676

select fname,lname,mrdno from patient_registration where  patient_registration_id='1775' and  office_id= '1' 
 Execution Time:0.00034093856811523

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00067996978759766

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00067996978759766

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0004119873046875

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005650520324707

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005650520324707

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00022482872009277

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010130405426025

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010130405426025

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031909942626953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031909942626953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031909942626953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031909942626953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031909942626953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031909942626953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031909942626953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060606002807617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031909942626953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060606002807617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036201477050781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064420700073242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064420700073242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039210319519043

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047397613525391

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047397613525391

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00036716461181641

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004880428314209

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004880428314209

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033116340637207

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00059103965759277

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00059103965759277

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00030612945556641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00035405158996582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019829273223877

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00065112113952637

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00065112113952637

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038909912109375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004119873046875

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004119873046875

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024223327636719

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024223327636719

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004420280456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024223327636719

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004420280456543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002255916595459

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00066685676574707

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00066685676574707

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00020194053649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077104568481445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077104568481445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038549900054932

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058698654174805

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058698654174805

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00019097328186035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029659271240234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029659271240234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013110637664795

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029659271240234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013110637664795

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029659271240234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013110637664795

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029659271240234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013110637664795

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029659271240234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013110637664795

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029659271240234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013110637664795

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029659271240234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013110637664795

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034999847412109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026049613952637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0070669651031494

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0070669651031494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0095958709716797

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0070669651031494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0095958709716797

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045120716094971

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0070669651031494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0095958709716797

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045120716094971

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002202033996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0070669651031494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0095958709716797

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045120716094971

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002202033996582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040969848632812

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0070669651031494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0095958709716797

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045120716094971

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002202033996582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040969848632812

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039889812469482

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0070669651031494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0095958709716797

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045120716094971

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002202033996582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040969848632812

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039889812469482

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037689208984375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0070669651031494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0095958709716797

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045120716094971

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002202033996582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040969848632812

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039889812469482

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037689208984375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0094799995422363

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005800724029541

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005800724029541

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00023198127746582

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006098747253418

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006098747253418

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033740997314453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033740997314453

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038797855377197

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033740997314453

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038797855377197

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00478196144104

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033740997314453

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038797855377197

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00478196144104

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037868022918701

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033740997314453

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038797855377197

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00478196144104

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037868022918701

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038089752197266

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033740997314453

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038797855377197

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00478196144104

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037868022918701

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038089752197266

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037639141082764

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033740997314453

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038797855377197

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00478196144104

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037868022918701

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038089752197266

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037639141082764

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037510395050049

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033740997314453

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038797855377197

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00478196144104

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037868022918701

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038089752197266

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037639141082764

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037510395050049

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0084908008575439

select count(*) as cnt from patient_registration where  patient_registration_id= '1755' and  office_id= '1' 
 Execution Time:0.00047206878662109

select count(*) as cnt from patient_registration where  patient_registration_id= '1755' and  office_id= '1' 
 Execution Time:0.00047206878662109

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1755' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029909610748291

select count(*) as cnt from patient_registration where  patient_registration_id= '1755' and  office_id= '1' 
 Execution Time:0.00047206878662109

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1755' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029909610748291

select fname,lname,mrdno from patient_registration where  patient_registration_id='1755' and  office_id= '1' 
 Execution Time:0.00033783912658691

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00041389465332031

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00041389465332031

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00023198127746582

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.002838134765625

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.002838134765625

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0018000602722168

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00094509124755859

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00094509124755859

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042390823364258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055429935455322

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055429935455322

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013331174850464

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055429935455322

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013331174850464

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0063989162445068

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055429935455322

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013331174850464

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0063989162445068

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0082809925079346

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055429935455322

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013331174850464

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0063989162445068

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0082809925079346

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0077459812164307

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055429935455322

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013331174850464

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0063989162445068

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0082809925079346

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0077459812164307

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037391185760498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055429935455322

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013331174850464

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0063989162445068

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0082809925079346

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0077459812164307

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037391185760498

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037360191345215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055429935455322

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013331174850464

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0063989162445068

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0082809925079346

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0077459812164307

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037391185760498

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037360191345215

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.019546985626221

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057990550994873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057990550994873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0062181949615479

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057990550994873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0062181949615479

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.011520147323608

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057990550994873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0062181949615479

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.011520147323608

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037641525268555

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057990550994873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0062181949615479

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.011520147323608

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037641525268555

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0028741359710693

select count(*) as cnt from patient_registration where  patient_registration_id= '1839' and  office_id= '1' 
 Execution Time:0.00063300132751465

select count(*) as cnt from patient_registration where  patient_registration_id= '1839' and  office_id= '1' 
 Execution Time:0.00063300132751465

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1839' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038020610809326

select count(*) as cnt from patient_registration where  patient_registration_id= '1839' and  office_id= '1' 
 Execution Time:0.00063300132751465

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1839' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038020610809326

select fname,lname,mrdno from patient_registration where  patient_registration_id='1839' and  office_id= '1' 
 Execution Time:0.00042414665222168

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.029067993164062

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.029067993164062

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0023660659790039

select * from investigation where  investigation_id=11  and office_id= 1 and status=1 
 Execution Time:0.0013301372528076

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.015614986419678

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.015614986419678

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.015614986419678

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.015614986419678

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.015614986419678

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053286552429199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053286552429199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026910305023193

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0030808448791504

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0030808448791504

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00069117546081543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0069491863250732

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0069491863250732

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0028138160705566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042691230773926

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042691230773926

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0053269863128662

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042691230773926

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0053269863128662

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020849704742432

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042691230773926

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0053269863128662

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020849704742432

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042788982391357

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042691230773926

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0053269863128662

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020849704742432

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042788982391357

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035369396209717

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042691230773926

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0053269863128662

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020849704742432

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042788982391357

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035369396209717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043940544128418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042691230773926

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0053269863128662

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020849704742432

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042788982391357

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035369396209717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043940544128418

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0035898685455322

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042691230773926

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0053269863128662

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020849704742432

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042788982391357

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035369396209717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043940544128418

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0035898685455322

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068249702453613

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00068402290344238

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00068402290344238

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042009353637695

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044393539428711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044393539428711

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025796890258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026941299438477

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026941299438477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033040046691895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026941299438477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033040046691895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001835823059082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026941299438477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033040046691895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001835823059082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036799907684326

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026941299438477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033040046691895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001835823059082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036799907684326

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037708282470703

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026941299438477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033040046691895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001835823059082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036799907684326

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037708282470703

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018000602722168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026941299438477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033040046691895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001835823059082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036799907684326

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037708282470703

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018000602722168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036451816558838

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026941299438477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033040046691895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001835823059082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036799907684326

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037708282470703

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018000602722168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036451816558838

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045380592346191

select count(*) as cnt from patient_registration where  patient_registration_id= '930' and  office_id= '1' 
 Execution Time:0.0041348934173584

select count(*) as cnt from patient_registration where  patient_registration_id= '930' and  office_id= '1' 
 Execution Time:0.0041348934173584

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='930' and  doctors_registration.office_id= '1' 
 Execution Time:0.0051369667053223

select count(*) as cnt from patient_registration where  patient_registration_id= '930' and  office_id= '1' 
 Execution Time:0.0041348934173584

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='930' and  doctors_registration.office_id= '1' 
 Execution Time:0.0051369667053223

select fname,lname,mrdno from patient_registration where  patient_registration_id='930' and  office_id= '1' 
 Execution Time:0.003068208694458

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012850761413574

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012850761413574

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011758804321289

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0050370693206787

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0050370693206787

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0043988227844238

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034599304199219

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034599304199219

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0026829242706299

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0031588077545166

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0031588077545166

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0026340484619141

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005490779876709

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005490779876709

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060105323791504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060105323791504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039989948272705

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060105323791504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039989948272705

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015780925750732

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060105323791504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039989948272705

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015780925750732

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015640258789062

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060105323791504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039989948272705

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015780925750732

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015640258789062

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046489238739014

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0093038082122803

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0093038082122803

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0077049732208252

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0093038082122803

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0077049732208252

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0076448917388916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0093038082122803

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0077049732208252

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0076448917388916

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0093038082122803

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0077049732208252

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0076448917388916

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0033559799194336

select count(*) as cnt from patient_registration where  patient_registration_id= '1755' and  office_id= '1' 
 Execution Time:0.0069098472595215

select count(*) as cnt from patient_registration where  patient_registration_id= '1755' and  office_id= '1' 
 Execution Time:0.0069098472595215

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1755' and  doctors_registration.office_id= '1' 
 Execution Time:0.010898113250732

select count(*) as cnt from patient_registration where  patient_registration_id= '1755' and  office_id= '1' 
 Execution Time:0.0069098472595215

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1755' and  doctors_registration.office_id= '1' 
 Execution Time:0.010898113250732

select fname,lname,mrdno from patient_registration where  patient_registration_id='1755' and  office_id= '1' 
 Execution Time:0.0048971176147461

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0038089752197266

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0038089752197266

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0038511753082275

select * from investigation where  investigation_id=4  and office_id= 1 and status=1 
 Execution Time:0.0046019554138184

select * from investigation where  investigation_id=11  and office_id= 1 and status=1 
 Execution Time:0.0032839775085449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070018768310547

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070018768310547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.007260799407959

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070018768310547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.007260799407959

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0066540241241455

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070018768310547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.007260799407959

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0066540241241455

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0075619220733643

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070018768310547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.007260799407959

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0066540241241455

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0075619220733643

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0023958683013916

select count(*) as cnt from patient_registration where  patient_registration_id= '1840' and  office_id= '1' 
 Execution Time:0.004209041595459

select count(*) as cnt from patient_registration where  patient_registration_id= '1840' and  office_id= '1' 
 Execution Time:0.004209041595459

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1840' and  doctors_registration.office_id= '1' 
 Execution Time:0.0053761005401611

select count(*) as cnt from patient_registration where  patient_registration_id= '1840' and  office_id= '1' 
 Execution Time:0.004209041595459

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1840' and  doctors_registration.office_id= '1' 
 Execution Time:0.0053761005401611

select fname,lname,mrdno from patient_registration where  patient_registration_id='1840' and  office_id= '1' 
 Execution Time:0.0053451061248779

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.003032922744751

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.003032922744751

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0021648406982422

select * from investigation where  investigation_id=11  and office_id= 1 and status=1 
 Execution Time:0.00496506690979

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0090019702911377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0090019702911377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0094428062438965

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0090019702911377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0094428062438965

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0028738975524902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0090019702911377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0094428062438965

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0028738975524902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.003666877746582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0090019702911377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0094428062438965

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0028738975524902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.003666877746582

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0021250247955322

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005800724029541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005800724029541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043408870697021

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032088756561279

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032088756561279

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032088756561279

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032088756561279

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0024328231811523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032088756561279

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0024328231811523

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.004274845123291

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002310037612915

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002310037612915

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037379264831543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002310037612915

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037379264831543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016820430755615

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002310037612915

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037379264831543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016820430755615

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048191547393799

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002310037612915

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037379264831543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016820430755615

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048191547393799

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037579536437988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002310037612915

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037379264831543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016820430755615

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048191547393799

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037579536437988

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037548542022705

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002310037612915

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037379264831543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016820430755615

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048191547393799

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037579536437988

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037548542022705

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0046451091766357

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002310037612915

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037379264831543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016820430755615

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0048191547393799

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037579536437988

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037548542022705

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0046451091766357

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0085330009460449

select count(*) as cnt from patient_registration where  patient_registration_id= '435' and  office_id= '1' 
 Execution Time:0.00040411949157715

select count(*) as cnt from patient_registration where  patient_registration_id= '435' and  office_id= '1' 
 Execution Time:0.00040411949157715

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='435' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021889209747314

select count(*) as cnt from patient_registration where  patient_registration_id= '435' and  office_id= '1' 
 Execution Time:0.00040411949157715

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='435' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021889209747314

select fname,lname,mrdno from patient_registration where  patient_registration_id='435' and  office_id= '1' 
 Execution Time:0.00028800964355469

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.002032995223999

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.002032995223999

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00072813034057617

select count(*) as cnt from patient_registration where  patient_registration_id= '1489' and  office_id= '1' 
 Execution Time:0.0033669471740723

select count(*) as cnt from patient_registration where  patient_registration_id= '1489' and  office_id= '1' 
 Execution Time:0.0033669471740723

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1489' and  doctors_registration.office_id= '1' 
 Execution Time:0.0049669742584229

select count(*) as cnt from patient_registration where  patient_registration_id= '1489' and  office_id= '1' 
 Execution Time:0.0033669471740723

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1489' and  doctors_registration.office_id= '1' 
 Execution Time:0.0049669742584229

select fname,lname,mrdno from patient_registration where  patient_registration_id='1489' and  office_id= '1' 
 Execution Time:0.0068719387054443

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0027670860290527

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0027670860290527

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0037829875946045

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00099611282348633

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00099611282348633

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00037598609924316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032861232757568

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032861232757568

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0048270225524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029990673065186

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029990673065186

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041909217834473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029990673065186

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041909217834473

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.008206844329834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029990673065186

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041909217834473

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.008206844329834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012068748474121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029990673065186

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041909217834473

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.008206844329834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012068748474121

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0079288482666016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029990673065186

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041909217834473

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.008206844329834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012068748474121

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0079288482666016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021448135375977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029990673065186

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041909217834473

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.008206844329834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012068748474121

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0079288482666016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021448135375977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.005033016204834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029990673065186

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041909217834473

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.008206844329834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012068748474121

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0079288482666016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021448135375977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.005033016204834

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077660083770752

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0037021636962891

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0037021636962891

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.003960132598877

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0019469261169434

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0019469261169434

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.003756046295166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011381149291992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011381149291992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036489963531494

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011381149291992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036489963531494

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038659572601318

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011381149291992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036489963531494

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038659572601318

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039329528808594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011381149291992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036489963531494

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038659572601318

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039329528808594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036189556121826

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011381149291992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036489963531494

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038659572601318

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039329528808594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036189556121826

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037710666656494

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011381149291992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036489963531494

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038659572601318

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039329528808594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036189556121826

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037710666656494

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006615161895752

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0013151168823242

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0013151168823242

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0033411979675293

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0059778690338135

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0059778690338135

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0017719268798828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029749870300293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029749870300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029749870300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029749870300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034189224243164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029749870300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034189224243164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0065817832946777

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029749870300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034189224243164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0065817832946777

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0050640106201172

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029749870300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034189224243164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0065817832946777

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0050640106201172

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019810199737549

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029749870300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034189224243164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0065817832946777

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0050640106201172

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019810199737549

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0075511932373047

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011810064315796

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011810064315796

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.011122941970825

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011810064315796

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.011122941970825

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0075418949127197

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011810064315796

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.011122941970825

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0075418949127197

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.016894102096558

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011810064315796

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.011122941970825

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0075418949127197

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.016894102096558

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.011893033981323

select count(*) as cnt from patient_registration where  patient_registration_id= '1847' and  office_id= '1' 
 Execution Time:0.0030961036682129

select count(*) as cnt from patient_registration where  patient_registration_id= '1847' and  office_id= '1' 
 Execution Time:0.0030961036682129

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1847' and  doctors_registration.office_id= '1' 
 Execution Time:0.01033878326416

select count(*) as cnt from patient_registration where  patient_registration_id= '1847' and  office_id= '1' 
 Execution Time:0.0030961036682129

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1847' and  doctors_registration.office_id= '1' 
 Execution Time:0.01033878326416

select fname,lname,mrdno from patient_registration where  patient_registration_id='1847' and  office_id= '1' 
 Execution Time:0.0038559436798096

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0079410076141357

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0079410076141357

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0061690807342529

select * from investigation where  investigation_id=4  and office_id= 1 and status=1 
 Execution Time:0.00079703330993652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.019114971160889

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.019114971160889

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.011134147644043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.019114971160889

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.011134147644043

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0092639923095703

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.019114971160889

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.011134147644043

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0092639923095703

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0088379383087158

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.019114971160889

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.011134147644043

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0092639923095703

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0088379383087158

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0097498893737793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030992031097412

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030992031097412

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015459060668945

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030992031097412

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015459060668945

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0055720806121826

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030992031097412

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015459060668945

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0055720806121826

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073909759521484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030992031097412

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015459060668945

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0055720806121826

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073909759521484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032989978790283

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030992031097412

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015459060668945

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0055720806121826

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073909759521484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032989978790283

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0082390308380127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030992031097412

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015459060668945

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0055720806121826

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073909759521484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032989978790283

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0082390308380127

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015220642089844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030992031097412

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015459060668945

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0055720806121826

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073909759521484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032989978790283

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0082390308380127

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015220642089844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0076591968536377

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057291984558105

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057291984558105

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031614303588867

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053095817565918

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053095817565918

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035619735717773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044589042663574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044589042663574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001086950302124

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044589042663574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001086950302124

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038750171661377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044589042663574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001086950302124

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038750171661377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025351047515869

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044589042663574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001086950302124

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038750171661377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025351047515869

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036211013793945

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044589042663574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001086950302124

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038750171661377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025351047515869

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036211013793945

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033359527587891

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044589042663574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001086950302124

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038750171661377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025351047515869

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036211013793945

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033359527587891

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0044848918914795

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044589042663574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001086950302124

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038750171661377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025351047515869

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036211013793945

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033359527587891

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0044848918914795

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012042999267578

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00076794624328613

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00076794624328613

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00040292739868164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081300735473633

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081300735473633

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033648014068604

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033648014068604

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0065908432006836

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033648014068604

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0065908432006836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036921501159668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033648014068604

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0065908432006836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036921501159668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075006484985352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033648014068604

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0065908432006836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036921501159668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075006484985352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029730796813965

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033648014068604

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0065908432006836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036921501159668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075006484985352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029730796813965

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024440288543701

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033648014068604

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0065908432006836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036921501159668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075006484985352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029730796813965

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024440288543701

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037360191345215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033648014068604

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0065908432006836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036921501159668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075006484985352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029730796813965

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024440288543701

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037360191345215

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047979354858398

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036101341247559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036101341247559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036101341247559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036101341247559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036101341247559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0020220279693604

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0020220279693604

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0028970241546631

select count(*) as cnt from billing_master where  billing_master_id= '306' and  office_id= '1' 
 Execution Time:0.00072693824768066

select count(*) as cnt from billing_master where  billing_master_id= '306' and  office_id= '1' 
 Execution Time:0.00072693824768066

select * from billing_master where  billing_master_id= '306' and  office_id= '1' 
 Execution Time:0.00040292739868164

select count(*) as cnt from billing_master where  billing_master_id= '306' and  office_id= '1' 
 Execution Time:0.00072693824768066

select * from billing_master where  billing_master_id= '306' and  office_id= '1' 
 Execution Time:0.00040292739868164

select * from billing_detail where  billing_master_id= '306' 
 Execution Time:0.0010550022125244

select count(*) as cnt from billing_master where  billing_master_id= '306' and  office_id= '1' 
 Execution Time:0.00072693824768066

select * from billing_master where  billing_master_id= '306' and  office_id= '1' 
 Execution Time:0.00040292739868164

select * from billing_detail where  billing_master_id= '306' 
 Execution Time:0.0010550022125244

select * from investigation where  investigation_id=4  and office_id= 1 and status=1 
 Execution Time:0.0006258487701416

select count(*) as cnt from patient_registration where  patient_registration_id= '1847' and  office_id= '1' 
 Execution Time:0.0011940002441406

select count(*) as cnt from patient_registration where  patient_registration_id= '1847' and  office_id= '1' 
 Execution Time:0.0011940002441406

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1847' and  doctors_registration.office_id= '1' 
 Execution Time:0.0016138553619385

select count(*) as cnt from patient_registration where  patient_registration_id= '1847' and  office_id= '1' 
 Execution Time:0.0011940002441406

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1847' and  doctors_registration.office_id= '1' 
 Execution Time:0.0016138553619385

select fname,lname,mrdno from patient_registration where  patient_registration_id='1847' and  office_id= '1' 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047588348388672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047588348388672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047588348388672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047588348388672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057196617126465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047588348388672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057196617126465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031728744506836

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00046706199645996

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00046706199645996

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00070881843566895

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0028870105743408

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0028870105743408

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0018339157104492

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036661624908447

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036661624908447

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.007749080657959

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036661624908447

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.007749080657959

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029170513153076

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036661624908447

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.007749080657959

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029170513153076

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0046439170837402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036661624908447

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.007749080657959

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029170513153076

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0046439170837402

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038111209869385

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036661624908447

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.007749080657959

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029170513153076

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0046439170837402

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038111209869385

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037848949432373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036661624908447

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.007749080657959

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029170513153076

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0046439170837402

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038111209869385

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037848949432373

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0047688484191895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036661624908447

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.007749080657959

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029170513153076

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0046439170837402

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038111209869385

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037848949432373

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0047688484191895

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010458946228027

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.001244068145752

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.001244068145752

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0039451122283936

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049901008605957

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049901008605957

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003446102142334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003446102142334

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002763032913208

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003446102142334

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002763032913208

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0051560401916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003446102142334

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002763032913208

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0051560401916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038411617279053

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003446102142334

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002763032913208

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0051560401916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038411617279053

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027768611907959

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003446102142334

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002763032913208

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0051560401916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038411617279053

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027768611907959

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034208297729492

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003446102142334

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002763032913208

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0051560401916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038411617279053

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027768611907959

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034208297729492

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0047941207885742

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003446102142334

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002763032913208

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0051560401916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038411617279053

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027768611907959

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034208297729492

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0047941207885742

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047240257263184

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00073981285095215

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00073981285095215

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042510032653809

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0021581649780273

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0021581649780273

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0096418857574463

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035629272460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035629272460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037388801574707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035629272460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037388801574707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037469863891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035629272460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037388801574707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037469863891602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040760040283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035629272460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037388801574707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037469863891602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040760040283203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019471645355225

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035629272460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037388801574707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037469863891602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040760040283203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019471645355225

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.012870073318481

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035629272460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037388801574707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037469863891602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040760040283203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019471645355225

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.012870073318481

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038430690765381

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035629272460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037388801574707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037469863891602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040760040283203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019471645355225

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.012870073318481

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038430690765381

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060360431671143

select count(*) as cnt from patient_registration where  patient_registration_id= '1449' and  office_id= '1' 
 Execution Time:0.00035500526428223

select count(*) as cnt from patient_registration where  patient_registration_id= '1449' and  office_id= '1' 
 Execution Time:0.00035500526428223

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1449' and  doctors_registration.office_id= '1' 
 Execution Time:0.0017578601837158

select count(*) as cnt from patient_registration where  patient_registration_id= '1449' and  office_id= '1' 
 Execution Time:0.00035500526428223

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1449' and  doctors_registration.office_id= '1' 
 Execution Time:0.0017578601837158

select fname,lname,mrdno from patient_registration where  patient_registration_id='1449' and  office_id= '1' 
 Execution Time:0.00026702880859375

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0025310516357422

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0025310516357422

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037193298339844

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049090385437012

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049090385437012

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028109550476074

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005040168762207

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005040168762207

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036787986755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036787986755371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034170150756836

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0014369487762451

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0014369487762451

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0024290084838867

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033807754516602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033807754516602

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022482872009277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033059120178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033059120178223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027210712432861

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033059120178223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027210712432861

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.005094051361084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033059120178223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027210712432861

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.005094051361084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0053579807281494

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033059120178223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027210712432861

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.005094051361084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0053579807281494

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028350353240967

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033059120178223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027210712432861

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.005094051361084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0053579807281494

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028350353240967

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021350383758545

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033059120178223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027210712432861

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.005094051361084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0053579807281494

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028350353240967

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021350383758545

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015478134155273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033059120178223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027210712432861

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.005094051361084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0053579807281494

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028350353240967

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021350383758545

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015478134155273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0074241161346436

select count(*) as cnt from patient_registration where  patient_registration_id= '1514' and  office_id= '1' 
 Execution Time:0.00063204765319824

select count(*) as cnt from patient_registration where  patient_registration_id= '1514' and  office_id= '1' 
 Execution Time:0.00063204765319824

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1514' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030651092529297

select count(*) as cnt from patient_registration where  patient_registration_id= '1514' and  office_id= '1' 
 Execution Time:0.00063204765319824

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1514' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030651092529297

select fname,lname,mrdno from patient_registration where  patient_registration_id='1514' and  office_id= '1' 
 Execution Time:0.0037448406219482

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035905838012695

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035905838012695

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00020003318786621

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00071501731872559

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00071501731872559

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00027585029602051

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00087499618530273

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00087499618530273

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028691291809082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028691291809082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003821849822998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028691291809082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003821849822998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00105881690979

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028691291809082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003821849822998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00105881690979

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013680458068848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028691291809082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003821849822998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00105881690979

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013680458068848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073719024658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028691291809082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003821849822998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00105881690979

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013680458068848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073719024658203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0046150684356689

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028691291809082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003821849822998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00105881690979

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013680458068848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073719024658203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0046150684356689

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060739517211914

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033402442932129

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033402442932129

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00024008750915527

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0008399486541748

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0008399486541748

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039410591125488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012791156768799

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012791156768799

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040349960327148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012791156768799

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040349960327148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034918785095215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012791156768799

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040349960327148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034918785095215

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0049569606781006

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012791156768799

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040349960327148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034918785095215

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0049569606781006

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039689540863037

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012791156768799

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040349960327148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034918785095215

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0049569606781006

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039689540863037

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038149356842041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012791156768799

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040349960327148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034918785095215

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0049569606781006

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039689540863037

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038149356842041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030879974365234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012791156768799

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040349960327148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034918785095215

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0049569606781006

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039689540863037

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038149356842041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030879974365234

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044238567352295

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00071811676025391

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00071811676025391

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.000885009765625

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064897537231445

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064897537231445

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00088596343994141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048017501831055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048017501831055

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042181015014648

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00093388557434082

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00093388557434082

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0011711120605469

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043106079101562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043106079101562

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033211708068848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033211708068848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033211708068848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033211708068848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006101131439209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033211708068848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006101131439209

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025169849395752

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052404403686523

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052404403686523

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028300285339355

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011329650878906

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011329650878906

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051093101501465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002007007598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002007007598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066614151000977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002007007598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066614151000977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045680999755859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002007007598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066614151000977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045680999755859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002007007598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066614151000977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045680999755859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013251304626465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002007007598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066614151000977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045680999755859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013251304626465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.016183853149414

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049686431884766

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049686431884766

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00024819374084473

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0025420188903809

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0025420188903809

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00093388557434082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025010108947754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025010108947754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025010108947754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025010108947754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043487548828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025010108947754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043487548828125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047049522399902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0090489387512207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0090489387512207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0049409866333008

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0090489387512207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0049409866333008

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0014939308166504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0090489387512207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0049409866333008

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0014939308166504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0032370090484619

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0090489387512207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0049409866333008

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0014939308166504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0032370090484619

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0042409896850586

select count(*) as cnt from patient_registration where  patient_registration_id= '1860' and  office_id= '1' 
 Execution Time:0.0027601718902588

select count(*) as cnt from patient_registration where  patient_registration_id= '1860' and  office_id= '1' 
 Execution Time:0.0027601718902588

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1860' and  doctors_registration.office_id= '1' 
 Execution Time:0.0050032138824463

select count(*) as cnt from patient_registration where  patient_registration_id= '1860' and  office_id= '1' 
 Execution Time:0.0027601718902588

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1860' and  doctors_registration.office_id= '1' 
 Execution Time:0.0050032138824463

select fname,lname,mrdno from patient_registration where  patient_registration_id='1860' and  office_id= '1' 
 Execution Time:0.0035619735717773

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0029230117797852

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0029230117797852

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0056939125061035

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.001856803894043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072028636932373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072028636932373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034990310668945

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072028636932373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034990310668945

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0076711177825928

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072028636932373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034990310668945

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0076711177825928

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.010653018951416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072028636932373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034990310668945

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0076711177825928

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.010653018951416

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0026500225067139

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036709308624268

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036709308624268

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036709308624268

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045895576477051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039577484130859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036709308624268

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045895576477051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039577484130859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036709308624268

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045895576477051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039577484130859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044989585876465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036709308624268

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045895576477051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039577484130859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044989585876465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032289028167725

select count(*) as cnt from patient_registration where  patient_registration_id= '1756' and  office_id= '1' 
 Execution Time:0.00072312355041504

select count(*) as cnt from patient_registration where  patient_registration_id= '1756' and  office_id= '1' 
 Execution Time:0.00072312355041504

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1756' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048940181732178

select count(*) as cnt from patient_registration where  patient_registration_id= '1756' and  office_id= '1' 
 Execution Time:0.00072312355041504

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1756' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048940181732178

select fname,lname,mrdno from patient_registration where  patient_registration_id='1756' and  office_id= '1' 
 Execution Time:0.001953125

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00056099891662598

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00056099891662598

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00062894821166992

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028300285339355

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028300285339355

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00020718574523926

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050997734069824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050997734069824

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039196014404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009620189666748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009620189666748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009620189666748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009620189666748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063109397888184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009620189666748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063109397888184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009620189666748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063109397888184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009620189666748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063109397888184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011069774627686

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009620189666748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063109397888184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011069774627686

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041019916534424

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0035631656646729

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0035631656646729

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00307297706604

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0072929859161377

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0072929859161377

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00077700614929199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079011917114258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079011917114258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079011917114258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079011917114258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079011917114258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079011917114258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042390823364258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079011917114258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042390823364258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036399364471436

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0006411075592041

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0006411075592041

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00030994415283203

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0051391124725342

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0051391124725342

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.003821849822998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0062201023101807

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0062201023101807

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068089962005615

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0062201023101807

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068089962005615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0086920261383057

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0062201023101807

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068089962005615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0086920261383057

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040371417999268

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0062201023101807

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068089962005615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0086920261383057

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040371417999268

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026078224182129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0062201023101807

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068089962005615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0086920261383057

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040371417999268

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026078224182129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038678646087646

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0062201023101807

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068089962005615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0086920261383057

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040371417999268

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026078224182129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038678646087646

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0035920143127441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0062201023101807

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068089962005615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0086920261383057

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040371417999268

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026078224182129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038678646087646

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0035920143127441

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063059329986572

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0028040409088135

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0028040409088135

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0018641948699951

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055289268493652

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055289268493652

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072789192199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028395652770996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028395652770996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028395652770996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028395652770996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005040168762207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024881362915039

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042991638183594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042991638183594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028350353240967

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042991638183594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028350353240967

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002763032913208

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042991638183594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028350353240967

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002763032913208

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038020610809326

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042991638183594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028350353240967

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002763032913208

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038020610809326

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0067570209503174

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042991638183594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028350353240967

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002763032913208

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038020610809326

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0067570209503174

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002918004989624

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042991638183594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028350353240967

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002763032913208

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038020610809326

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0067570209503174

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002918004989624

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036101341247559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042991638183594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028350353240967

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002763032913208

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038020610809326

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0067570209503174

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002918004989624

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036101341247559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0084409713745117

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0079379081726074

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0079379081726074

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038537979125977

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0056169033050537

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0056169033050537

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0067439079284668

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064706802368164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064706802368164

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0027351379394531

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035250186920166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035250186920166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003892183303833

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035250186920166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003892183303833

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040969848632812

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035250186920166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003892183303833

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040969848632812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035250186920166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003892183303833

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040969848632812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.006803035736084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035250186920166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003892183303833

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040969848632812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.006803035736084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0068600177764893

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035250186920166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003892183303833

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040969848632812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.006803035736084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0068600177764893

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0061309337615967

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035250186920166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003892183303833

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040969848632812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.006803035736084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0068600177764893

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0061309337615967

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080530643463135

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0050220489501953

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0050220489501953

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0058059692382812

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00069189071655273

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00069189071655273

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00089192390441895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072383880615234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072383880615234

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040149688720703

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021481513977051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021481513977051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021481513977051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021481513977051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061702728271484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021481513977051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061702728271484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023560523986816

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003568172454834

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003568172454834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00093817710876465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003568172454834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00093817710876465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013999938964844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003568172454834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00093817710876465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013999938964844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003568172454834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00093817710876465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013999938964844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00073814392089844

select count(*) as cnt from patient_registration where  patient_registration_id= '1866' and  office_id= '1' 
 Execution Time:0.00045680999755859

select count(*) as cnt from patient_registration where  patient_registration_id= '1866' and  office_id= '1' 
 Execution Time:0.00045680999755859

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1866' and  doctors_registration.office_id= '1' 
 Execution Time:0.0036840438842773

select count(*) as cnt from patient_registration where  patient_registration_id= '1866' and  office_id= '1' 
 Execution Time:0.00045680999755859

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1866' and  doctors_registration.office_id= '1' 
 Execution Time:0.0036840438842773

select fname,lname,mrdno from patient_registration where  patient_registration_id='1866' and  office_id= '1' 
 Execution Time:0.00039100646972656

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00072789192199707

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00072789192199707

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0025420188903809

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00063014030456543

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00046396255493164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004378080368042

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004378080368042

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004378080368042

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00075411796569824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004378080368042

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00075411796569824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004378080368042

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00075411796569824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028481483459473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028481483459473

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028481483459473

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030059814453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028481483459473

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030059814453125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072789192199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028481483459473

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030059814453125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072789192199707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057220458984375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028481483459473

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030059814453125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072789192199707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057220458984375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028481483459473

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030059814453125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072789192199707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057220458984375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025460720062256

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028481483459473

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030059814453125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072789192199707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057220458984375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025460720062256

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046632289886475

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00083780288696289

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00083780288696289

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00046396255493164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056004524230957

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056004524230957

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004417896270752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010550022125244

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010550022125244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013399124145508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010550022125244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013399124145508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010550022125244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013399124145508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020408630371094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010550022125244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013399124145508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020408630371094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010550022125244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013399124145508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020408630371094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010550022125244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013399124145508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020408630371094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00035786628723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010550022125244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013399124145508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020408630371094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00035786628723145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020849704742432

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035359859466553

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035359859466553

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035359859466553

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035359859466553

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035359859466553

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select count(*) as cnt from patient_registration where  patient_registration_id= '1849' and  office_id= '1' 
 Execution Time:0.00033879280090332

select count(*) as cnt from patient_registration where  patient_registration_id= '1849' and  office_id= '1' 
 Execution Time:0.00033879280090332

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1849' and  doctors_registration.office_id= '1' 
 Execution Time:0.0035419464111328

select count(*) as cnt from patient_registration where  patient_registration_id= '1849' and  office_id= '1' 
 Execution Time:0.00033879280090332

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1849' and  doctors_registration.office_id= '1' 
 Execution Time:0.0035419464111328

select fname,lname,mrdno from patient_registration where  patient_registration_id='1849' and  office_id= '1' 
 Execution Time:0.0032529830932617

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00062704086303711

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00062704086303711

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049805641174316

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00051283836364746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043327808380127

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043327808380127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065183639526367

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043327808380127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065183639526367

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043327808380127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065183639526367

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043327808380127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065183639526367

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002122163772583

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002122163772583

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008091926574707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002122163772583

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008091926574707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043120384216309

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0011179447174072

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0011179447174072

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0036041736602783

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036001205444336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036001205444336

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052690505981445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002288818359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002288818359375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002288818359375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002288818359375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002288818359375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044798851013184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034840106964111

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001978874206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001978874206543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001978874206543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047397613525391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021719932556152

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037813186645508

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037813186645508

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0039999485015869

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.000823974609375

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.000823974609375

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00024795532226562

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.005079984664917

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.005079984664917

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00060391426086426

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00035715103149414

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00035715103149414

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00026798248291016

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00080108642578125

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00080108642578125

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046992301940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077581405639648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077581405639648

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077581405639648

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077581405639648

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077581405639648

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015919208526611

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077581405639648

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015919208526611

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077581405639648

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015919208526611

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077581405639648

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015919208526611

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032997131347656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023419857025146

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0033400058746338

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0033400058746338

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0044131278991699

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030899047851562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030899047851562

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041890144348145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041890144348145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023918151855469

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0034029483795166

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0034029483795166

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0038549900054932

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0058479309082031

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0058479309082031

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013258457183838

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032877922058105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032877922058105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036368370056152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032877922058105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036368370056152

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037410259246826

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032877922058105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036368370056152

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037410259246826

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032877922058105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036368370056152

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037410259246826

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032877922058105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036368370056152

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037410259246826

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055384635925293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032877922058105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036368370056152

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037410259246826

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055384635925293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035760402679443

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041320323944092

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041320323944092

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012631416320801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041320323944092

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012631416320801

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041320323944092

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012631416320801

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041320323944092

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012631416320801

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select count(*) as cnt from patient_registration where  patient_registration_id= '1845' and  office_id= '1' 
 Execution Time:0.00074410438537598

select count(*) as cnt from patient_registration where  patient_registration_id= '1845' and  office_id= '1' 
 Execution Time:0.00074410438537598

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1845' and  doctors_registration.office_id= '1' 
 Execution Time:0.0047168731689453

select count(*) as cnt from patient_registration where  patient_registration_id= '1845' and  office_id= '1' 
 Execution Time:0.00074410438537598

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1845' and  doctors_registration.office_id= '1' 
 Execution Time:0.0047168731689453

select fname,lname,mrdno from patient_registration where  patient_registration_id='1845' and  office_id= '1' 
 Execution Time:0.00051403045654297

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016751289367676

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016751289367676

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0018479824066162

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00055599212646484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002532958984375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002532958984375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002532958984375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002532958984375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002532958984375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012688636779785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012688636779785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024428367614746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012688636779785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024428367614746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0058290958404541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012688636779785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024428367614746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0058290958404541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0072801113128662

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012688636779785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024428367614746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0058290958404541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0072801113128662

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.011276006698608

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012688636779785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024428367614746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0058290958404541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0072801113128662

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.011276006698608

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040378570556641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012688636779785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024428367614746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0058290958404541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0072801113128662

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.011276006698608

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040378570556641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069117546081543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012688636779785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024428367614746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0058290958404541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0072801113128662

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.011276006698608

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040378570556641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069117546081543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031681060791016

select count(*) as cnt from patient_registration where  patient_registration_id= '670' and  office_id= '1' 
 Execution Time:0.00066590309143066

select count(*) as cnt from patient_registration where  patient_registration_id= '670' and  office_id= '1' 
 Execution Time:0.00066590309143066

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='670' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031998157501221

select count(*) as cnt from patient_registration where  patient_registration_id= '670' and  office_id= '1' 
 Execution Time:0.00066590309143066

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='670' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031998157501221

select fname,lname,mrdno from patient_registration where  patient_registration_id='670' and  office_id= '1' 
 Execution Time:0.00060510635375977

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00045514106750488

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00045514106750488

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033550262451172

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033550262451172

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034980773925781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033550262451172

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034980773925781

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037329196929932

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033550262451172

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034980773925781

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037329196929932

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037858486175537

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033550262451172

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034980773925781

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037329196929932

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037858486175537

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026540756225586

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033550262451172

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034980773925781

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037329196929932

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037858486175537

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026540756225586

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038821697235107

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033550262451172

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034980773925781

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037329196929932

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037858486175537

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026540756225586

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038821697235107

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019910335540771

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033550262451172

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034980773925781

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037329196929932

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037858486175537

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026540756225586

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038821697235107

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019910335540771

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045387744903564

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029683113098145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029683113098145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029683113098145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029683113098145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062799453735352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029683113098145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062799453735352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021321773529053

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021195411682129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021195411682129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021195411682129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021195411682129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058197975158691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021195411682129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058197975158691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023789405822754

select count(*) as cnt from patient_registration where  patient_registration_id= '670' and  office_id= '1' 
 Execution Time:0.011392116546631

select count(*) as cnt from patient_registration where  patient_registration_id= '670' and  office_id= '1' 
 Execution Time:0.011392116546631

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='670' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048580169677734

select count(*) as cnt from patient_registration where  patient_registration_id= '670' and  office_id= '1' 
 Execution Time:0.011392116546631

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='670' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048580169677734

select fname,lname,mrdno from patient_registration where  patient_registration_id='670' and  office_id= '1' 
 Execution Time:0.0037970542907715

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0015099048614502

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0015099048614502

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0025339126586914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042598247528076

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042598247528076

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021049976348877

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042598247528076

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021049976348877

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00094294548034668

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042598247528076

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021049976348877

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00094294548034668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0028049945831299

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042598247528076

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021049976348877

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00094294548034668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0028049945831299

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0031769275665283

select count(*) as cnt from patient_registration where  patient_registration_id= '1849' and  office_id= '1' 
 Execution Time:0.0030701160430908

select count(*) as cnt from patient_registration where  patient_registration_id= '1849' and  office_id= '1' 
 Execution Time:0.0030701160430908

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1849' and  doctors_registration.office_id= '1' 
 Execution Time:0.00541090965271

select count(*) as cnt from patient_registration where  patient_registration_id= '1849' and  office_id= '1' 
 Execution Time:0.0030701160430908

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1849' and  doctors_registration.office_id= '1' 
 Execution Time:0.00541090965271

select fname,lname,mrdno from patient_registration where  patient_registration_id='1849' and  office_id= '1' 
 Execution Time:0.0037150382995605

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0019857883453369

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0019857883453369

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0041980743408203

select * from investigation where  investigation_id=20  and office_id= 1 and status=1 
 Execution Time:0.00056195259094238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047969818115234

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047969818115234

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026521682739258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047969818115234

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026521682739258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0032460689544678

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047969818115234

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026521682739258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0032460689544678

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0015280246734619

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047969818115234

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026521682739258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0032460689544678

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0015280246734619

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0013020038604736

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019021034240723

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019021034240723

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019021034240723

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047016143798828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019021034240723

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047016143798828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019021034240723

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047016143798828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019021034240723

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047016143798828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00094914436340332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019021034240723

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047016143798828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00094914436340332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032339096069336

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0024640560150146

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0024640560150146

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00046586990356445

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0029330253601074

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0029330253601074

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0022590160369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00571608543396

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00571608543396

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031328201293945

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00571608543396

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031328201293945

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038299560546875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00571608543396

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031328201293945

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038299560546875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032670497894287

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00571608543396

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031328201293945

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038299560546875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032670497894287

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033268928527832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00571608543396

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031328201293945

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038299560546875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032670497894287

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033268928527832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037910938262939

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00571608543396

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031328201293945

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038299560546875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032670497894287

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033268928527832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037910938262939

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0096800327301025

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0013580322265625

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0013580322265625

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0028200149536133

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0021779537200928

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0021779537200928

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011000633239746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025599002838135

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025599002838135

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012478828430176

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025599002838135

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012478828430176

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0059640407562256

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025599002838135

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012478828430176

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0059640407562256

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024430751800537

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025599002838135

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012478828430176

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0059640407562256

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024430751800537

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025599002838135

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012478828430176

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0059640407562256

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024430751800537

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043480396270752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025599002838135

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012478828430176

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0059640407562256

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024430751800537

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043480396270752

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0051150321960449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025599002838135

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012478828430176

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0059640407562256

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024430751800537

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043480396270752

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0051150321960449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047008991241455

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015299320220947

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015299320220947

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0028469562530518

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058603286743164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058603286743164

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031900405883789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043416023254395

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043416023254395

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00016593933105469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030612945556641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030612945556641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030612945556641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030612945556641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030612945556641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005040168762207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034098625183105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030279159545898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030279159545898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030279159545898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048589706420898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030279159545898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048589706420898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024018287658691

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003809928894043

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003809928894043

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032782554626465

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028610229492188

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028610229492188

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022006034851074

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0013649463653564

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0013649463653564

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0029830932617188

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00080204010009766

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00080204010009766

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040507316589355

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00059294700622559

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00059294700622559

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028419494628906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022430419921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022430419921875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014889240264893

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022430419921875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014889240264893

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022430419921875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014889240264893

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013589859008789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022430419921875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014889240264893

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013589859008789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022430419921875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014889240264893

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013589859008789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022430419921875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014889240264893

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013589859008789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010840892791748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022430419921875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014889240264893

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013589859008789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010840892791748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024986267089844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024986267089844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024986267089844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024986267089844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047183036804199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024986267089844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047183036804199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023939609527588

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024104118347168

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024104118347168

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023102760314941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038759708404541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038759708404541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038759708404541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038759708404541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038759708404541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select count(*) as cnt from billing_master where  billing_master_id= '308' and  office_id= '1' 
 Execution Time:0.0025880336761475

select count(*) as cnt from billing_master where  billing_master_id= '308' and  office_id= '1' 
 Execution Time:0.0025880336761475

select * from billing_master where  billing_master_id= '308' and  office_id= '1' 
 Execution Time:0.006011962890625

select count(*) as cnt from billing_master where  billing_master_id= '308' and  office_id= '1' 
 Execution Time:0.0025880336761475

select * from billing_master where  billing_master_id= '308' and  office_id= '1' 
 Execution Time:0.006011962890625

select * from billing_detail where  billing_master_id= '308' 
 Execution Time:0.0033109188079834

select count(*) as cnt from billing_master where  billing_master_id= '308' and  office_id= '1' 
 Execution Time:0.0025880336761475

select * from billing_master where  billing_master_id= '308' and  office_id= '1' 
 Execution Time:0.006011962890625

select * from billing_detail where  billing_master_id= '308' 
 Execution Time:0.0033109188079834

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.0031909942626953

select count(*) as cnt from billing_master where  billing_master_id= '308' and  office_id= '1' 
 Execution Time:0.0025880336761475

select * from billing_master where  billing_master_id= '308' and  office_id= '1' 
 Execution Time:0.006011962890625

select * from billing_detail where  billing_master_id= '308' 
 Execution Time:0.0033109188079834

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.0031909942626953

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0013258457183838

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.006309986114502

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.006309986114502

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0062451362609863

select count(*) as cnt from patient_registration where  patient_registration_id= '1866' and  office_id= '1' 
 Execution Time:0.00051283836364746

select count(*) as cnt from patient_registration where  patient_registration_id= '1866' and  office_id= '1' 
 Execution Time:0.00051283836364746

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1866' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038979053497314

select count(*) as cnt from patient_registration where  patient_registration_id= '1866' and  office_id= '1' 
 Execution Time:0.00051283836364746

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1866' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038979053497314

select fname,lname,mrdno from patient_registration where  patient_registration_id='1866' and  office_id= '1' 
 Execution Time:0.00031280517578125

select count(*) as cnt from patient_registration where  patient_registration_id= '1866' and  office_id= '1' 
 Execution Time:0.00070309638977051

select count(*) as cnt from patient_registration where  patient_registration_id= '1866' and  office_id= '1' 
 Execution Time:0.00070309638977051

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1866' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031969547271729

select count(*) as cnt from patient_registration where  patient_registration_id= '1866' and  office_id= '1' 
 Execution Time:0.00070309638977051

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1866' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031969547271729

select fname,lname,mrdno from patient_registration where  patient_registration_id='1866' and  office_id= '1' 
 Execution Time:0.00043892860412598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043292045593262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043292045593262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079584121704102

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043292045593262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079584121704102

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001032829284668

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043292045593262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079584121704102

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001032829284668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043292045593262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079584121704102

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001032829284668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015759468078613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015759468078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027759075164795

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015759468078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027759075164795

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0069191455841064

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015759468078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027759075164795

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0069191455841064

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045561790466309

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015759468078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027759075164795

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0069191455841064

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045561790466309

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036988258361816

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015759468078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027759075164795

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0069191455841064

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045561790466309

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036988258361816

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027139186859131

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015759468078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027759075164795

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0069191455841064

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045561790466309

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036988258361816

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027139186859131

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036399364471436

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015759468078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027759075164795

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0069191455841064

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045561790466309

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036988258361816

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027139186859131

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036399364471436

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045700073242188

select count(*) as cnt from patient_registration where  patient_registration_id= '1646' and  office_id= '1' 
 Execution Time:0.0014710426330566

select count(*) as cnt from patient_registration where  patient_registration_id= '1646' and  office_id= '1' 
 Execution Time:0.0014710426330566

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1646' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030980110168457

select count(*) as cnt from patient_registration where  patient_registration_id= '1646' and  office_id= '1' 
 Execution Time:0.0014710426330566

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1646' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030980110168457

select fname,lname,mrdno from patient_registration where  patient_registration_id='1646' and  office_id= '1' 
 Execution Time:0.00036215782165527

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00095391273498535

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00095391273498535

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00091385841369629

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00065898895263672

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00065898895263672

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00045609474182129

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0028729438781738

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0028729438781738

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001054048538208

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014920234680176

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014920234680176

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0055549144744873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014920234680176

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0055549144744873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034019947052002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014920234680176

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0055549144744873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034019947052002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020749568939209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014920234680176

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0055549144744873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034019947052002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020749568939209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027258396148682

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014920234680176

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0055549144744873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034019947052002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020749568939209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027258396148682

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031847953796387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014920234680176

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0055549144744873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034019947052002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020749568939209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027258396148682

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031847953796387

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025768280029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014920234680176

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0055549144744873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034019947052002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020749568939209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027258396148682

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031847953796387

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025768280029297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061690807342529

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029439926147461

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029439926147461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0067610740661621

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029439926147461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0067610740661621

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029439926147461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0067610740661621

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029439926147461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0067610740661621

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047361850738525

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047361850738525

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036590099334717

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047361850738525

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036590099334717

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037429332733154

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047361850738525

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036590099334717

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037429332733154

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047738552093506

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047361850738525

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036590099334717

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037429332733154

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047738552093506

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037901401519775

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047361850738525

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036590099334717

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037429332733154

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047738552093506

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037901401519775

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037438869476318

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047361850738525

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036590099334717

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037429332733154

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047738552093506

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037901401519775

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037438869476318

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0064108371734619

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047361850738525

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036590099334717

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037429332733154

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047738552093506

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037901401519775

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037438869476318

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0064108371734619

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078020095825195

select count(*) as cnt from patient_registration where  patient_registration_id= '699' and  office_id= '1' 
 Execution Time:0.018016815185547

select count(*) as cnt from patient_registration where  patient_registration_id= '699' and  office_id= '1' 
 Execution Time:0.018016815185547

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='699' and  doctors_registration.office_id= '1' 
 Execution Time:0.0078511238098145

select count(*) as cnt from patient_registration where  patient_registration_id= '699' and  office_id= '1' 
 Execution Time:0.018016815185547

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='699' and  doctors_registration.office_id= '1' 
 Execution Time:0.0078511238098145

select fname,lname,mrdno from patient_registration where  patient_registration_id='699' and  office_id= '1' 
 Execution Time:0.0058150291442871

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.011922121047974

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.011922121047974

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0020918846130371

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00086283683776855

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00086283683776855

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0047268867492676

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038559436798096

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038559436798096

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033619403839111

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033619403839111

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0047791004180908

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033619403839111

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0047791004180908

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024650096893311

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033619403839111

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0047791004180908

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024650096893311

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036838054656982

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033619403839111

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0047791004180908

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024650096893311

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036838054656982

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029299259185791

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033619403839111

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0047791004180908

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024650096893311

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036838054656982

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029299259185791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024302005767822

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033619403839111

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0047791004180908

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024650096893311

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036838054656982

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029299259185791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024302005767822

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0047421455383301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033619403839111

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0047791004180908

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024650096893311

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036838054656982

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029299259185791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024302005767822

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0047421455383301

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0074119567871094

select count(*) as cnt from patient_registration where  patient_registration_id= '524' and  office_id= '1' 
 Execution Time:0.0006101131439209

select count(*) as cnt from patient_registration where  patient_registration_id= '524' and  office_id= '1' 
 Execution Time:0.0006101131439209

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='524' and  doctors_registration.office_id= '1' 
 Execution Time:0.0035271644592285

select count(*) as cnt from patient_registration where  patient_registration_id= '524' and  office_id= '1' 
 Execution Time:0.0006101131439209

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='524' and  doctors_registration.office_id= '1' 
 Execution Time:0.0035271644592285

select fname,lname,mrdno from patient_registration where  patient_registration_id='524' and  office_id= '1' 
 Execution Time:0.0003349781036377

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012021064758301

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012021064758301

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033688545227051

select count(*) as cnt from patient_registration where  patient_registration_id= '1714' and  office_id= '1' 
 Execution Time:0.0025131702423096

select count(*) as cnt from patient_registration where  patient_registration_id= '1714' and  office_id= '1' 
 Execution Time:0.0025131702423096

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1714' and  doctors_registration.office_id= '1' 
 Execution Time:0.0050699710845947

select count(*) as cnt from patient_registration where  patient_registration_id= '1714' and  office_id= '1' 
 Execution Time:0.0025131702423096

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1714' and  doctors_registration.office_id= '1' 
 Execution Time:0.0050699710845947

select fname,lname,mrdno from patient_registration where  patient_registration_id='1714' and  office_id= '1' 
 Execution Time:0.0030758380889893

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034470558166504

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034470558166504

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0031189918518066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0076370239257812

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0076370239257812

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030980110168457

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0076370239257812

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030980110168457

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039529800415039

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0076370239257812

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030980110168457

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039529800415039

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038928985595703

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0076370239257812

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030980110168457

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039529800415039

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038928985595703

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0059928894042969

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0076370239257812

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030980110168457

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039529800415039

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038928985595703

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0059928894042969

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036721229553223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0076370239257812

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030980110168457

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039529800415039

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038928985595703

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0059928894042969

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036721229553223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0047550201416016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0076370239257812

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030980110168457

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039529800415039

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038928985595703

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0059928894042969

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036721229553223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0047550201416016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010267019271851

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.002161979675293

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.002161979675293

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0069239139556885

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.003464937210083

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.003464937210083

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.002877950668335

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0021469593048096

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0021469593048096

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0011780261993408

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041103363037109

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041103363037109

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062298774719238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053977966308594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053977966308594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053977966308594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053977966308594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053977966308594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053977966308594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057005882263184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053977966308594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057005882263184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003507137298584

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00097894668579102

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00097894668579102

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038599967956543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0035378932952881

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0035378932952881

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001777172088623

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095009803771973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095009803771973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095009803771973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095009803771973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036716461181641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095009803771973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036716461181641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095009803771973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036716461181641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095009803771973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036716461181641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057196617126465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095009803771973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036716461181641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057196617126465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046360492706299

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045690536499023

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045690536499023

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017189979553223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045690536499023

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017189979553223

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.010931015014648

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045690536499023

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017189979553223

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.010931015014648

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0045812129974365

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045690536499023

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017189979553223

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.010931015014648

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0045812129974365

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.016321182250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033309459686279

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033309459686279

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041649341583252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033309459686279

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041649341583252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0055398941040039

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033309459686279

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041649341583252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0055398941040039

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016829967498779

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033309459686279

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041649341583252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0055398941040039

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016829967498779

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027978420257568

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033309459686279

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041649341583252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0055398941040039

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016829967498779

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027978420257568

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.016572952270508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033309459686279

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041649341583252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0055398941040039

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016829967498779

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027978420257568

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.016572952270508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0057640075683594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033309459686279

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041649341583252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0055398941040039

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016829967498779

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027978420257568

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.016572952270508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0057640075683594

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047299861907959

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0013909339904785

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0013909339904785

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0036258697509766

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0009300708770752

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0009300708770752

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0057311058044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0097100734710693

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0097100734710693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013871192932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0097100734710693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013871192932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042581558227539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0097100734710693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013871192932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042581558227539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013358592987061

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0097100734710693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013871192932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042581558227539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013358592987061

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0097100734710693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013871192932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042581558227539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013358592987061

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012359619140625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0097100734710693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013871192932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042581558227539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013358592987061

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012359619140625

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0043108463287354

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0097100734710693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013871192932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042581558227539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013358592987061

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012359619140625

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0043108463287354

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066280364990234

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00069880485534668

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00069880485534668

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0002751350402832

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010509490966797

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010509490966797

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0020060539245605

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035409927368164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035409927368164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036280155181885

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035409927368164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036280155181885

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047149658203125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035409927368164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036280155181885

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047149658203125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047919750213623

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035409927368164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036280155181885

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047149658203125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047919750213623

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0046210289001465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035409927368164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036280155181885

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047149658203125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047919750213623

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0046210289001465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028979778289795

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035409927368164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036280155181885

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047149658203125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047919750213623

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0046210289001465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028979778289795

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026528835296631

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035409927368164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036280155181885

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047149658203125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047919750213623

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0046210289001465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028979778289795

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026528835296631

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077190399169922

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0016400814056396

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0016400814056396

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037193298339844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033309459686279

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033309459686279

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016450881958008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0074789524078369

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0074789524078369

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068609714508057

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0074789524078369

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068609714508057

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037910938262939

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0074789524078369

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068609714508057

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037910938262939

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0097811222076416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0074789524078369

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068609714508057

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037910938262939

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0097811222076416

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0058090686798096

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0074789524078369

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068609714508057

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037910938262939

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0097811222076416

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0058090686798096

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0077669620513916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0074789524078369

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068609714508057

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037910938262939

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0097811222076416

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0058090686798096

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0077669620513916

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037310123443604

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0074789524078369

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068609714508057

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037910938262939

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0097811222076416

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0058090686798096

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0077669620513916

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037310123443604

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056331157684326

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0043230056762695

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0043230056762695

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00043702125549316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043916702270508

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043916702270508

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032615661621094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032615661621094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032615661621094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032615661621094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072002410888672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032615661621094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072002410888672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039591789245605

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081970691680908

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081970691680908

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081970691680908

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00078582763671875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081970691680908

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00078582763671875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081970691680908

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00078582763671875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0015139579772949

select count(*) as cnt from patient_registration where  patient_registration_id= '1646' and  office_id= '1' 
 Execution Time:0.0050961971282959

select count(*) as cnt from patient_registration where  patient_registration_id= '1646' and  office_id= '1' 
 Execution Time:0.0050961971282959

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1646' and  doctors_registration.office_id= '1' 
 Execution Time:0.0052080154418945

select count(*) as cnt from patient_registration where  patient_registration_id= '1646' and  office_id= '1' 
 Execution Time:0.0050961971282959

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1646' and  doctors_registration.office_id= '1' 
 Execution Time:0.0052080154418945

select fname,lname,mrdno from patient_registration where  patient_registration_id='1646' and  office_id= '1' 
 Execution Time:0.0038809776306152

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0037291049957275

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0037291049957275

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0029361248016357

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0034420490264893

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050950050354004

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050950050354004

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020260810852051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050950050354004

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020260810852051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0042071342468262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050950050354004

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020260810852051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0042071342468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037171840667725

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050950050354004

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020260810852051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0042071342468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037171840667725

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0037238597869873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045514106750488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045514106750488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046041011810303

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0031828880310059

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0031828880310059

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0037031173706055

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.010539054870605

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.010539054870605

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.006803035736084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039670467376709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039670467376709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038111209869385

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039670467376709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038111209869385

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017991065979004

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039670467376709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038111209869385

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017991065979004

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038199424743652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039670467376709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038111209869385

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017991065979004

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038199424743652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016839504241943

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039670467376709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038111209869385

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017991065979004

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038199424743652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016839504241943

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039670467376709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038111209869385

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017991065979004

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038199424743652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016839504241943

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036020278930664

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039670467376709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038111209869385

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017991065979004

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038199424743652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016839504241943

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036020278930664

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0085961818695068

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00070476531982422

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00070476531982422

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.002655029296875

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068807601928711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068807601928711

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053215026855469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035030841827393

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035030841827393

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002007007598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035030841827393

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002007007598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033249855041504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035030841827393

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002007007598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033249855041504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0043690204620361

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035030841827393

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002007007598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033249855041504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0043690204620361

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035090446472168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035030841827393

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002007007598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033249855041504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0043690204620361

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035090446472168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013980865478516

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035030841827393

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002007007598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033249855041504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0043690204620361

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035090446472168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013980865478516

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081086158752441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035030841827393

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002007007598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033249855041504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0043690204620361

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035090446472168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013980865478516

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081086158752441

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038759708404541

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00040912628173828

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00040912628173828

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00021219253540039

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00094103813171387

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00094103813171387

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040006637573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041389465332031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001427173614502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001427173614502

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031940937042236

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001427173614502

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031940937042236

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0044369697570801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001427173614502

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031940937042236

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0044369697570801

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017809867858887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001427173614502

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031940937042236

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0044369697570801

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017809867858887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017938613891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001427173614502

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031940937042236

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0044369697570801

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017809867858887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017938613891602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039808750152588

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001427173614502

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031940937042236

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0044369697570801

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017809867858887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017938613891602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039808750152588

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059888362884521

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0092229843139648

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0092229843139648

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001943826675415

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0092229843139648

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001943826675415

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0063390731811523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0092229843139648

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001943826675415

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0063390731811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0014479160308838

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0092229843139648

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001943826675415

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0063390731811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0014479160308838

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.010251998901367

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071470737457275

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071470737457275

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020439624786377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071470737457275

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020439624786377

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0028181076049805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071470737457275

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020439624786377

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0028181076049805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.004270076751709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071470737457275

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020439624786377

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0028181076049805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.004270076751709

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0073108673095703

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006248950958252

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006248950958252

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031850337982178

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006248950958252

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031850337982178

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036101341247559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006248950958252

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031850337982178

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036101341247559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006248950958252

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031850337982178

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036101341247559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0018520355224609

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0097479820251465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0097479820251465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040910243988037

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0097479820251465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040910243988037

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036320686340332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0097479820251465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040910243988037

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036320686340332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0032920837402344

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0097479820251465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040910243988037

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036320686340332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0032920837402344

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0024878978729248

select count(*) as cnt from patient_registration where  patient_registration_id= '1882' and  office_id= '1' 
 Execution Time:0.0017139911651611

select count(*) as cnt from patient_registration where  patient_registration_id= '1882' and  office_id= '1' 
 Execution Time:0.0017139911651611

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1882' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029211044311523

select count(*) as cnt from patient_registration where  patient_registration_id= '1882' and  office_id= '1' 
 Execution Time:0.0017139911651611

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1882' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029211044311523

select fname,lname,mrdno from patient_registration where  patient_registration_id='1882' and  office_id= '1' 
 Execution Time:0.0019080638885498

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0062160491943359

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0062160491943359

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0036728382110596

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.022841930389404

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059549808502197

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059549808502197

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003986120223999

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059549808502197

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003986120223999

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0034530162811279

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059549808502197

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003986120223999

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0034530162811279

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0035278797149658

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059549808502197

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003986120223999

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0034530162811279

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0035278797149658

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0036978721618652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023438930511475

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023438930511475

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002741813659668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023438930511475

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002741813659668

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037791728973389

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023438930511475

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002741813659668

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037791728973389

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023438930511475

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002741813659668

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037791728973389

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027968883514404

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023438930511475

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002741813659668

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037791728973389

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027968883514404

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.006782054901123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023438930511475

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002741813659668

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037791728973389

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027968883514404

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.006782054901123

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0057661533355713

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023438930511475

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002741813659668

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037791728973389

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027968883514404

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.006782054901123

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0057661533355713

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045218467712402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035231113433838

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035231113433838

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014309883117676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035231113433838

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014309883117676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037000179290771

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035231113433838

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014309883117676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037000179290771

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037989616394043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035231113433838

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014309883117676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037000179290771

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037989616394043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035231113433838

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014309883117676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037000179290771

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037989616394043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0041160583496094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035231113433838

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014309883117676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037000179290771

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037989616394043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0041160583496094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034329891204834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035231113433838

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014309883117676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037000179290771

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037989616394043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0041160583496094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034329891204834

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046908855438232

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0065028667449951

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0065028667449951

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0035109519958496

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038819313049316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038819313049316

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001629114151001

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.06141209602356

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.06141209602356

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0088720321655273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.06141209602356

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0088720321655273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0057611465454102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.06141209602356

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0088720321655273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0057611465454102

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037801265716553

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.06141209602356

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0088720321655273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0057611465454102

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037801265716553

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047769546508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.06141209602356

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0088720321655273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0057611465454102

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037801265716553

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047769546508789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037200450897217

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.06141209602356

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0088720321655273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0057611465454102

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037801265716553

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047769546508789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037200450897217

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003756046295166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.06141209602356

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0088720321655273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0057611465454102

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037801265716553

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047769546508789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037200450897217

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003756046295166

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048189163208008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031759738922119

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031759738922119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036091804504395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031759738922119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036091804504395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001816987991333

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031759738922119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036091804504395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001816987991333

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033490657806396

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031759738922119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036091804504395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001816987991333

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033490657806396

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015530586242676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031759738922119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036091804504395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001816987991333

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033490657806396

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015530586242676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034420490264893

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031759738922119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036091804504395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001816987991333

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033490657806396

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015530586242676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034420490264893

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016300678253174

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031759738922119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036091804504395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001816987991333

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033490657806396

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015530586242676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034420490264893

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016300678253174

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011165857315063

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0045690536499023

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0045690536499023

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00701904296875

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033199787139893

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033199787139893

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0025291442871094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014222860336304

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014222860336304

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0067408084869385

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014222860336304

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0067408084869385

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048201084136963

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014222860336304

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0067408084869385

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048201084136963

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003838062286377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014222860336304

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0067408084869385

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048201084136963

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003838062286377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0048408508300781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014222860336304

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0067408084869385

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048201084136963

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003838062286377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0048408508300781

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028889179229736

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014222860336304

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0067408084869385

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048201084136963

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003838062286377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0048408508300781

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028889179229736

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0046308040618896

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014222860336304

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0067408084869385

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048201084136963

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003838062286377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0048408508300781

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028889179229736

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0046308040618896

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.02043604850769

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081789493560791

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081789493560791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029909610748291

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081789493560791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029909610748291

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0067369937896729

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081789493560791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029909610748291

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0067369937896729

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0058770179748535

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081789493560791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029909610748291

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0067369937896729

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0058770179748535

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.016136169433594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012538433074951

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012538433074951

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012738704681396

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012538433074951

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012738704681396

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012538433074951

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012738704681396

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0055990219116211

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012538433074951

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012738704681396

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0055990219116211

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037088394165039

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012538433074951

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012738704681396

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0055990219116211

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037088394165039

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0047979354858398

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012538433074951

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012738704681396

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0055990219116211

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037088394165039

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0047979354858398

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037579536437988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012538433074951

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012738704681396

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0055990219116211

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037088394165039

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0047979354858398

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037579536437988

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046019554138184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029489994049072

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029489994049072

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029489994049072

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029489994049072

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029489994049072

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002830982208252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002830982208252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028679370880127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002830982208252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028679370880127

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024681091308594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002830982208252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028679370880127

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024681091308594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002161979675293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002830982208252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028679370880127

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024681091308594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002161979675293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023291110992432

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002830982208252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028679370880127

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024681091308594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002161979675293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023291110992432

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002830982208252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028679370880127

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024681091308594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002161979675293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023291110992432

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023269653320312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002830982208252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028679370880127

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024681091308594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002161979675293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023291110992432

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023269653320312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0006251335144043

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0006251335144043

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00029492378234863

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00076389312744141

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00076389312744141

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00049114227294922

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.010025024414062

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 42 
 Execution Time:0.00071907043457031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078105926513672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 42 
 Execution Time:0.00079679489135742

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 42 
 Execution Time:0.00045609474182129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 42 
 Execution Time:0.00054597854614258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 42 
 Execution Time:0.00049996376037598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0043730735778809

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 42 
 Execution Time:0.0011990070343018

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033359527587891


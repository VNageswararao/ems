select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026669502258301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026669502258301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027830600738525

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026669502258301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027830600738525

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024948120117188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026669502258301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027830600738525

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024948120117188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00189208984375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026669502258301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027830600738525

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024948120117188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00189208984375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023849010467529

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026669502258301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027830600738525

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024948120117188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00189208984375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023849010467529

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026669502258301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027830600738525

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024948120117188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00189208984375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023849010467529

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027000904083252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026669502258301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027830600738525

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024948120117188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00189208984375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023849010467529

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027000904083252

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00384521484375

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00062394142150879

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00062394142150879

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031304359436035

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030398368835449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030398368835449

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002751350402832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021505355834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021505355834961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021505355834961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021505355834961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021505355834961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004119873046875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031628608703613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038211345672607

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038211345672607

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038211345672607

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0023798942565918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038211345672607

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0023798942565918

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0041577816009521

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-26' and  '2021-11-26' and  billing_master.office_id= 1        
 Execution Time:0.0017971992492676

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-26' and  '2021-11-26' and  billing_master.office_id= 1        
 Execution Time:0.0017971992492676

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-11-26' and '2021-11-26' and  patient_registration.office_id= 1      
 Execution Time:0.01298999786377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017905235290527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017905235290527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017905235290527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017905235290527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038313865661621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017905235290527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038313865661621

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053269863128662

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00072097778320312

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00072097778320312

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039100646972656

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0041191577911377

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0041191577911377

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0035979747772217

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066900253295898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066900253295898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004378080368042

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034093856811523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034093856811523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034093856811523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067687034606934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034093856811523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067687034606934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037920475006104

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00045299530029297

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00045299530029297

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00021600723266602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050711631774902

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050711631774902

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027084350585938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027084350585938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027084350585938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027084350585938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058484077453613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027084350585938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058484077453613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052919387817383

select count(*) as cnt from patient_registration where  patient_registration_id= '2370' and  office_id= '1' 
 Execution Time:0.00048089027404785

select count(*) as cnt from patient_registration where  patient_registration_id= '2370' and  office_id= '1' 
 Execution Time:0.00048089027404785

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2370' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027108192443848

select count(*) as cnt from patient_registration where  patient_registration_id= '2370' and  office_id= '1' 
 Execution Time:0.00048089027404785

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2370' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027108192443848

select fname,lname,mrdno from patient_registration where  patient_registration_id='2370' and  office_id= '1' 
 Execution Time:0.00049996376037598

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056910514831543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056910514831543

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002448558807373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043509006500244

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043509006500244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031700134277344

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043509006500244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031700134277344

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010030269622803

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043509006500244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031700134277344

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010030269622803

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043509006500244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031700134277344

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010030269622803

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030100345611572

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043509006500244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031700134277344

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010030269622803

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030100345611572

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038621425628662

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043509006500244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031700134277344

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010030269622803

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030100345611572

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038621425628662

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037970542907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043509006500244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031700134277344

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010030269622803

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030100345611572

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038621425628662

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037970542907715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0084760189056396

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016729831695557

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016729831695557

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016729831695557

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016729831695557

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060391426086426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016729831695557

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060391426086426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016729831695557

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060391426086426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016729831695557

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060391426086426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084900856018066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016729831695557

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060391426086426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084900856018066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072200298309326

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047802925109863

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047802925109863

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00040912628173828

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0011839866638184

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0011839866638184

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00046181678771973

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044488906860352

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044488906860352

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0053870677947998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049304962158203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049304962158203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049304962158203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049304962158203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006260871887207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049304962158203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006260871887207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060160160064697

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.001007080078125

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.001007080078125

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0061249732971191

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0059149265289307

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0059149265289307

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00089406967163086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0078129768371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0078129768371582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011343955993652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0078129768371582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011343955993652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030131340026855

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0078129768371582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011343955993652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030131340026855

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021450519561768

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0078129768371582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011343955993652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030131340026855

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021450519561768

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0069169998168945

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0078129768371582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011343955993652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030131340026855

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021450519561768

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0069169998168945

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039560794830322

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0078129768371582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011343955993652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030131340026855

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021450519561768

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0069169998168945

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039560794830322

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0047352313995361

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0078129768371582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011343955993652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030131340026855

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021450519561768

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0069169998168945

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039560794830322

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0047352313995361

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0079858303070068

select count(*) as cnt from patient_registration where  patient_registration_id= '2036' and  office_id= '1' 
 Execution Time:0.00034189224243164

select count(*) as cnt from patient_registration where  patient_registration_id= '2036' and  office_id= '1' 
 Execution Time:0.00034189224243164

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2036' and  doctors_registration.office_id= '1' 
 Execution Time:0.0036299228668213

select count(*) as cnt from patient_registration where  patient_registration_id= '2036' and  office_id= '1' 
 Execution Time:0.00034189224243164

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2036' and  doctors_registration.office_id= '1' 
 Execution Time:0.0036299228668213

select fname,lname,mrdno from patient_registration where  patient_registration_id='2036' and  office_id= '1' 
 Execution Time:0.00025296211242676

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069308280944824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069308280944824

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031805038452148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051469802856445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051469802856445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051469802856445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016589164733887

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051469802856445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016589164733887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051469802856445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016589164733887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0026488304138184

select count(*) as cnt from patient_registration where  patient_registration_id= '2899' and  office_id= '1' 
 Execution Time:0.00032210350036621

select count(*) as cnt from patient_registration where  patient_registration_id= '2899' and  office_id= '1' 
 Execution Time:0.00032210350036621

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2899' and  doctors_registration.office_id= '1' 
 Execution Time:0.004176139831543

select count(*) as cnt from patient_registration where  patient_registration_id= '2899' and  office_id= '1' 
 Execution Time:0.00032210350036621

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2899' and  doctors_registration.office_id= '1' 
 Execution Time:0.004176139831543

select fname,lname,mrdno from patient_registration where  patient_registration_id='2899' and  office_id= '1' 
 Execution Time:0.00024700164794922

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0029191970825195

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0029191970825195

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0082249641418457

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0082249641418457

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0058050155639648

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0082249641418457

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0058050155639648

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.011035919189453

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0082249641418457

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0058050155639648

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.011035919189453

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0010621547698975

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0082249641418457

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0058050155639648

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.011035919189453

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0010621547698975

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033879280090332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033879280090332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026679039001465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033879280090332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026679039001465

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063395500183105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033879280090332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026679039001465

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063395500183105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056610107421875

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030684471130371

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030684471130371

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00027108192443848

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046801567077637

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046801567077637

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023913383483887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090384483337402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090384483337402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090384483337402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090384483337402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090384483337402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033092498779297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090384483337402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033092498779297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090384483337402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033092498779297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060701370239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090384483337402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033092498779297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060701370239258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073668956756592

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00040698051452637

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00040698051452637

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00029611587524414

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052905082702637

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052905082702637

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035786628723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030016899108887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030016899108887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030016899108887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030016899108887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030016899108887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052404403686523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054030418395996

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00062084197998047

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00062084197998047

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00031614303588867

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034270286560059

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034270286560059

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.003587007522583

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00033187866210938

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00033187866210938

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00026082992553711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018129348754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018129348754883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035061836242676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018129348754883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035061836242676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015699863433838

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018129348754883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035061836242676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015699863433838

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046396255493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018129348754883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035061836242676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015699863433838

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046396255493164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018129348754883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035061836242676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015699863433838

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046396255493164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018129348754883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035061836242676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015699863433838

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046396255493164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053596496582031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018129348754883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035061836242676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015699863433838

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046396255493164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053596496582031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041351318359375

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0004279613494873

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0004279613494873

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00033211708068848

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004889965057373

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004889965057373

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034189224243164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045394897460938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045394897460938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045394897460938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057005882263184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045394897460938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057005882263184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050020217895508

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00065302848815918

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00065302848815918

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00036501884460449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063395500183105

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063395500183105

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009009838104248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009009838104248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009009838104248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009009838104248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034713745117188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009009838104248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034713745117188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009009838104248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034713745117188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009009838104248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034713745117188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077104568481445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009009838104248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034713745117188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077104568481445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047080516815186

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00045418739318848

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00045418739318848

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0002140998840332

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00088787078857422

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00088787078857422

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038480758666992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038480758666992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038480758666992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029516220092773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038480758666992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029516220092773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038480758666992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029516220092773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011491775512695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038480758666992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029516220092773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011491775512695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057482719421387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038480758666992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029516220092773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011491775512695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057482719421387

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035600662231445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062530040740967

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062530040740967

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062530040740967

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062530040740967

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062530040740967

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053501129150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053501129150391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037469863891602

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034093856811523

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034093856811523

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00026893615722656

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046396255493164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046396255493164

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037407875061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037407875061035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027680397033691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037407875061035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027680397033691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037407875061035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027680397033691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065994262695312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037407875061035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027680397033691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065994262695312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059499740600586

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039641857147217

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039641857147217

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039641857147217

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039641857147217

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-27' and  '2021-11-27' and  billing_master.office_id= 1        
 Execution Time:0.0012850761413574

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-27' and  '2021-11-27' and  billing_master.office_id= 1        
 Execution Time:0.0012850761413574

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-11-27' and '2021-11-27' and  patient_registration.office_id= 1      
 Execution Time:0.0046989917755127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040006637573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040006637573242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040006637573242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040006637573242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00111985206604

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040006637573242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00111985206604

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048048496246338

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041699409484863

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041699409484863

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00021505355834961

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036406517028809

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036406517028809

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047111511230469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047111511230469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047111511230469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047111511230469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082087516784668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047111511230469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082087516784668

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070881843566895

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00089502334594727

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00089502334594727

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003960132598877

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041508674621582

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041508674621582

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029420852661133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0091710090637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0091710090637207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0091710090637207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0091710090637207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052595138549805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0091710090637207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052595138549805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00080490112304688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0091710090637207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052595138549805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00080490112304688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0091710090637207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052595138549805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00080490112304688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043582916259766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0091710090637207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052595138549805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00080490112304688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043582916259766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056869983673096

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00048494338989258

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00048494338989258

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0002748966217041

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042390823364258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042390823364258

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035881996154785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019621849060059

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019621849060059

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019621849060059

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019621849060059

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019621849060059

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034499168395996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004824161529541

select count(*) as cnt from patient_registration where  patient_registration_id= '2456' and  office_id= '1' 
 Execution Time:0.0006868839263916

select count(*) as cnt from patient_registration where  patient_registration_id= '2456' and  office_id= '1' 
 Execution Time:0.0006868839263916

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2456' and  doctors_registration.office_id= '1' 
 Execution Time:0.0047779083251953

select count(*) as cnt from patient_registration where  patient_registration_id= '2456' and  office_id= '1' 
 Execution Time:0.0006868839263916

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2456' and  doctors_registration.office_id= '1' 
 Execution Time:0.0047779083251953

select fname,lname,mrdno from patient_registration where  patient_registration_id='2456' and  office_id= '1' 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002612829208374

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002612829208374

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002612829208374

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001183032989502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002612829208374

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001183032989502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055384635925293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002612829208374

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001183032989502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055384635925293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015339851379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002612829208374

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001183032989502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055384635925293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015339851379395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002612829208374

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001183032989502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055384635925293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015339851379395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089311599731445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002612829208374

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001183032989502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055384635925293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015339851379395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089311599731445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064880847930908

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00046300888061523

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00046300888061523

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030779838562012

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0007321834564209

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0007321834564209

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00099611282348633

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00048303604125977

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00048303604125977

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00045204162597656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039370059967041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039370059967041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0087299346923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039370059967041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0087299346923828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0058000087738037

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039370059967041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0087299346923828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0058000087738037

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039989948272705

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039370059967041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0087299346923828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0058000087738037

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039989948272705

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037970542907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039370059967041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0087299346923828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0058000087738037

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039989948272705

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037970542907715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0044591426849365

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039370059967041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0087299346923828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0058000087738037

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039989948272705

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037970542907715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0044591426849365

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00229811668396

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039370059967041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0087299346923828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0058000087738037

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039989948272705

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037970542907715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0044591426849365

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00229811668396

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069689750671387

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072641372680664

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072641372680664

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021989345550537

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072641372680664

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021989345550537

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035140514373779

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072641372680664

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021989345550537

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035140514373779

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00047421455383301

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072641372680664

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021989345550537

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035140514373779

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00047421455383301

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select count(*) as cnt from patient_registration where  patient_registration_id= '2902' and  office_id= '1' 
 Execution Time:0.003140926361084

select count(*) as cnt from patient_registration where  patient_registration_id= '2902' and  office_id= '1' 
 Execution Time:0.003140926361084

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2902' and  doctors_registration.office_id= '1' 
 Execution Time:0.0051789283752441

select count(*) as cnt from patient_registration where  patient_registration_id= '2902' and  office_id= '1' 
 Execution Time:0.003140926361084

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2902' and  doctors_registration.office_id= '1' 
 Execution Time:0.0051789283752441

select fname,lname,mrdno from patient_registration where  patient_registration_id='2902' and  office_id= '1' 
 Execution Time:0.0016119480133057

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0026161670684814

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0026161670684814

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012180805206299

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.0028901100158691

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00059008598327637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.014075040817261

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.014075040817261

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039968490600586

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.014075040817261

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039968490600586

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035560131072998

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.014075040817261

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039968490600586

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035560131072998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0038049221038818

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.014075040817261

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039968490600586

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035560131072998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0038049221038818

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0038020610809326

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019097328186035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019097328186035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019097328186035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019097328186035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079202651977539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019097328186035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079202651977539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052499771118164

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057506561279297

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057506561279297

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028395652770996

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002748966217041

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002748966217041

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002129077911377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010049343109131

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010049343109131

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023658275604248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010049343109131

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023658275604248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010049343109131

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023658275604248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042009353637695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010049343109131

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023658275604248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042009353637695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010049343109131

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023658275604248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042009353637695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010049343109131

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023658275604248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042009353637695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043487548828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010049343109131

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023658275604248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042009353637695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043487548828125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053150653839111

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031399726867676

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031399726867676

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0002439022064209

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047707557678223

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047707557678223

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010190010070801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010190010070801

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010190010070801

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010190010070801

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061202049255371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010190010070801

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061202049255371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055761337280273

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00087094306945801

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00087094306945801

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00040197372436523

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004279613494873

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004279613494873

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026988983154297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013430118560791

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013430118560791

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013430118560791

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013430118560791

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013430118560791

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050902366638184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031201839447021

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00040292739868164

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00040292739868164

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00023603439331055

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046801567077637

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046801567077637

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029277801513672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029277801513672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029277801513672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026679039001465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029277801513672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026679039001465

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053286552429199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029277801513672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026679039001465

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053286552429199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058169364929199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024080276489258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024080276489258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024080276489258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024080276489258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024080276489258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004580020904541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058341026306152

select count(*) as cnt from patient_registration where  patient_registration_id= '2336' and  office_id= '1' 
 Execution Time:0.00032281875610352

select count(*) as cnt from patient_registration where  patient_registration_id= '2336' and  office_id= '1' 
 Execution Time:0.00032281875610352

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2336' and  doctors_registration.office_id= '1' 
 Execution Time:0.0045359134674072

select count(*) as cnt from patient_registration where  patient_registration_id= '2336' and  office_id= '1' 
 Execution Time:0.00032281875610352

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2336' and  doctors_registration.office_id= '1' 
 Execution Time:0.0045359134674072

select fname,lname,mrdno from patient_registration where  patient_registration_id='2336' and  office_id= '1' 
 Execution Time:0.0002751350402832

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00078606605529785

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00078606605529785

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00046896934509277

select count(*) as cnt from patient_registration where  patient_registration_id= '2339' and  office_id= '1' 
 Execution Time:0.00046610832214355

select count(*) as cnt from patient_registration where  patient_registration_id= '2339' and  office_id= '1' 
 Execution Time:0.00046610832214355

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2339' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048508644104004

select count(*) as cnt from patient_registration where  patient_registration_id= '2339' and  office_id= '1' 
 Execution Time:0.00046610832214355

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2339' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048508644104004

select fname,lname,mrdno from patient_registration where  patient_registration_id='2339' and  office_id= '1' 
 Execution Time:0.0004279613494873

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045108795166016

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045108795166016

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019011497497559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019011497497559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019011497497559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088977813720703

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019011497497559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088977813720703

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016779899597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019011497497559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088977813720703

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016779899597168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019011497497559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088977813720703

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016779899597168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010178089141846

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019011497497559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088977813720703

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016779899597168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010178089141846

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050740242004395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080204010009766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080204010009766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080204010009766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080204010009766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005180835723877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080204010009766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005180835723877

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056099891662598

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00065183639526367

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00065183639526367

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00070309638977051

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013039112091064

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013039112091064

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016610622406006

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046586990356445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046586990356445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000518798828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000518798828125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000518798828125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000518798828125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023007392883301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000518798828125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023007392883301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000518798828125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023007392883301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000518798828125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023007392883301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045204162597656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000518798828125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023007392883301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045204162597656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038540363311768

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035405158996582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035405158996582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035405158996582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0024228096008301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035405158996582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0024228096008301

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058219432830811

select count(*) as cnt from patient_registration where  patient_registration_id= '1097' and  office_id= '1' 
 Execution Time:0.00050997734069824

select count(*) as cnt from patient_registration where  patient_registration_id= '1097' and  office_id= '1' 
 Execution Time:0.00050997734069824

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1097' and  doctors_registration.office_id= '1' 
 Execution Time:0.0051839351654053

select count(*) as cnt from patient_registration where  patient_registration_id= '1097' and  office_id= '1' 
 Execution Time:0.00050997734069824

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1097' and  doctors_registration.office_id= '1' 
 Execution Time:0.0051839351654053

select fname,lname,mrdno from patient_registration where  patient_registration_id='1097' and  office_id= '1' 
 Execution Time:0.0017311573028564

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00056695938110352

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00056695938110352

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00029587745666504

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00039911270141602

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00039911270141602

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0002439022064209

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032615661621094

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032615661621094

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029778480529785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021538734436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021538734436035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014939308166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021538734436035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014939308166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021538734436035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014939308166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012409687042236

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021538734436035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014939308166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012409687042236

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010931491851807

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021538734436035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014939308166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012409687042236

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010931491851807

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021538734436035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014939308166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012409687042236

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010931491851807

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00096487998962402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021538734436035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014939308166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012409687042236

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010931491851807

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00096487998962402

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011033058166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022480487823486

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022480487823486

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022480487823486

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022480487823486

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002471923828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022480487823486

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002471923828125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030448436737061

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022480487823486

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002471923828125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030448436737061

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032689571380615

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022480487823486

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002471923828125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030448436737061

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032689571380615

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0070121288299561

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022480487823486

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002471923828125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030448436737061

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032689571380615

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0070121288299561

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0088210105895996

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049901008605957

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049901008605957

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035214424133301

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00046300888061523

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00046300888061523

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040006637573242

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060200691223145

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060200691223145

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046086311340332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046086311340332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046086311340332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057315826416016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046086311340332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057315826416016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.000885009765625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046086311340332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057315826416016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.000885009765625

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058770179748535

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068380832672119

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068380832672119

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068380832672119

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068380832672119

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068380832672119

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.000518798828125

select count(*) as cnt from patient_registration where  patient_registration_id= '2915' and  office_id= '1' 
 Execution Time:0.00041580200195312

select count(*) as cnt from patient_registration where  patient_registration_id= '2915' and  office_id= '1' 
 Execution Time:0.00041580200195312

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2915' and  doctors_registration.office_id= '1' 
 Execution Time:0.0046491622924805

select count(*) as cnt from patient_registration where  patient_registration_id= '2915' and  office_id= '1' 
 Execution Time:0.00041580200195312

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2915' and  doctors_registration.office_id= '1' 
 Execution Time:0.0046491622924805

select fname,lname,mrdno from patient_registration where  patient_registration_id='2915' and  office_id= '1' 
 Execution Time:0.0015199184417725

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.011101961135864

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.011101961135864

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043892860412598

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00080490112304688

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00080490112304688

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00072884559631348

select * from investigation where  investigation_id=11  and office_id= 1 and status=1 
 Execution Time:0.00043201446533203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063059329986572

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063059329986572

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063059329986572

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063059329986572

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063059329986572

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select count(*) as cnt from billing_master where  billing_master_id= '475' and  office_id= '1' 
 Execution Time:0.0005500316619873

select count(*) as cnt from billing_master where  billing_master_id= '475' and  office_id= '1' 
 Execution Time:0.0005500316619873

select * from billing_master where  billing_master_id= '475' and  office_id= '1' 
 Execution Time:0.0003199577331543

select count(*) as cnt from billing_master where  billing_master_id= '475' and  office_id= '1' 
 Execution Time:0.0005500316619873

select * from billing_master where  billing_master_id= '475' and  office_id= '1' 
 Execution Time:0.0003199577331543

select * from billing_detail where  billing_master_id= '475' 
 Execution Time:0.00093698501586914

select count(*) as cnt from billing_master where  billing_master_id= '475' and  office_id= '1' 
 Execution Time:0.0005500316619873

select * from billing_master where  billing_master_id= '475' and  office_id= '1' 
 Execution Time:0.0003199577331543

select * from billing_detail where  billing_master_id= '475' 
 Execution Time:0.00093698501586914

select * from investigation where  investigation_id=11  and office_id= 1 and status=1 
 Execution Time:0.0005180835723877

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0012941360473633

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0012941360473633

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0022711753845215

select count(*) as cnt from patient_registration where  patient_registration_id= '2915' and  office_id= '1' 
 Execution Time:0.00040102005004883

select count(*) as cnt from patient_registration where  patient_registration_id= '2915' and  office_id= '1' 
 Execution Time:0.00040102005004883

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2915' and  doctors_registration.office_id= '1' 
 Execution Time:0.004155158996582

select count(*) as cnt from patient_registration where  patient_registration_id= '2915' and  office_id= '1' 
 Execution Time:0.00040102005004883

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2915' and  doctors_registration.office_id= '1' 
 Execution Time:0.004155158996582

select fname,lname,mrdno from patient_registration where  patient_registration_id='2915' and  office_id= '1' 
 Execution Time:0.00038599967956543

select count(*) as cnt from patient_registration where  patient_registration_id= '2915' and  office_id= '1' 
 Execution Time:0.00042605400085449

select count(*) as cnt from patient_registration where  patient_registration_id= '2915' and  office_id= '1' 
 Execution Time:0.00042605400085449

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2915' and  doctors_registration.office_id= '1' 
 Execution Time:0.0036678314208984

select count(*) as cnt from patient_registration where  patient_registration_id= '2915' and  office_id= '1' 
 Execution Time:0.00042605400085449

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2915' and  doctors_registration.office_id= '1' 
 Execution Time:0.0036678314208984

select fname,lname,mrdno from patient_registration where  patient_registration_id='2915' and  office_id= '1' 
 Execution Time:0.00026702880859375

select count(*) as cnt from patient_registration where  patient_registration_id= '2339' and  office_id= '1' 
 Execution Time:0.00044798851013184

select count(*) as cnt from patient_registration where  patient_registration_id= '2339' and  office_id= '1' 
 Execution Time:0.00044798851013184

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2339' and  doctors_registration.office_id= '1' 
 Execution Time:0.0052709579467773

select count(*) as cnt from patient_registration where  patient_registration_id= '2339' and  office_id= '1' 
 Execution Time:0.00044798851013184

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2339' and  doctors_registration.office_id= '1' 
 Execution Time:0.0052709579467773

select fname,lname,mrdno from patient_registration where  patient_registration_id='2339' and  office_id= '1' 
 Execution Time:0.00029206275939941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078082084655762

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078082084655762

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078082084655762

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078082084655762

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078082084655762

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030207633972168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046777725219727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030207633972168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046777725219727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030207633972168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046777725219727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074601173400879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030207633972168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046777725219727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074601173400879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056889057159424

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00074315071105957

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00074315071105957

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042986869812012

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047588348388672

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047588348388672

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033211708068848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021750926971436

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021750926971436

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010519027709961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021750926971436

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010519027709961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025699138641357

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021750926971436

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010519027709961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025699138641357

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019140243530273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021750926971436

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010519027709961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025699138641357

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019140243530273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00086879730224609

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021750926971436

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010519027709961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025699138641357

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019140243530273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00086879730224609

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035431385040283

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021750926971436

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010519027709961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025699138641357

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019140243530273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00086879730224609

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035431385040283

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022380352020264

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021750926971436

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010519027709961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025699138641357

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019140243530273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00086879730224609

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035431385040283

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022380352020264

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0094521045684814

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041985511779785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041985511779785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063180923461914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041985511779785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063180923461914

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041985511779785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063180923461914

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061321258544922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041985511779785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063180923461914

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061321258544922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071818828582764

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00076103210449219

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00076103210449219

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00031805038452148

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003659725189209

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003659725189209

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028085708618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066184997558594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066184997558594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066184997558594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066184997558594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066184997558594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066184997558594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066184997558594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046205520629883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066184997558594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046205520629883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051229000091553

select count(*) as cnt from patient_registration where  patient_registration_id= '2336' and  office_id= '1' 
 Execution Time:0.00037288665771484

select count(*) as cnt from patient_registration where  patient_registration_id= '2336' and  office_id= '1' 
 Execution Time:0.00037288665771484

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2336' and  doctors_registration.office_id= '1' 
 Execution Time:0.0056970119476318

select count(*) as cnt from patient_registration where  patient_registration_id= '2336' and  office_id= '1' 
 Execution Time:0.00037288665771484

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2336' and  doctors_registration.office_id= '1' 
 Execution Time:0.0056970119476318

select fname,lname,mrdno from patient_registration where  patient_registration_id='2336' and  office_id= '1' 
 Execution Time:0.0027420520782471

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.005295991897583

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.005295991897583

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00059294700622559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030848979949951

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030848979949951

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031671524047852

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030848979949951

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031671524047852

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022408962249756

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030848979949951

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031671524047852

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022408962249756

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032761096954346

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030848979949951

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031671524047852

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022408962249756

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032761096954346

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018820762634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030848979949951

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031671524047852

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022408962249756

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032761096954346

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018820762634277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001539945602417

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030848979949951

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031671524047852

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022408962249756

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032761096954346

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018820762634277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001539945602417

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025739669799805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030848979949951

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031671524047852

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022408962249756

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032761096954346

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018820762634277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001539945602417

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025739669799805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069379806518555

select count(*) as cnt from patient_registration where  patient_registration_id= '2793' and  office_id= '1' 
 Execution Time:0.002349853515625

select count(*) as cnt from patient_registration where  patient_registration_id= '2793' and  office_id= '1' 
 Execution Time:0.002349853515625

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2793' and  doctors_registration.office_id= '1' 
 Execution Time:0.0052490234375

select count(*) as cnt from patient_registration where  patient_registration_id= '2793' and  office_id= '1' 
 Execution Time:0.002349853515625

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2793' and  doctors_registration.office_id= '1' 
 Execution Time:0.0052490234375

select fname,lname,mrdno from patient_registration where  patient_registration_id='2793' and  office_id= '1' 
 Execution Time:0.0025157928466797

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.001600980758667

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.001600980758667

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00034189224243164

select count(*) as cnt from patient_registration where  patient_registration_id= '1330' and  office_id= '1' 
 Execution Time:0.00038409233093262

select count(*) as cnt from patient_registration where  patient_registration_id= '1330' and  office_id= '1' 
 Execution Time:0.00038409233093262

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1330' and  doctors_registration.office_id= '1' 
 Execution Time:0.0026259422302246

select count(*) as cnt from patient_registration where  patient_registration_id= '1330' and  office_id= '1' 
 Execution Time:0.00038409233093262

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1330' and  doctors_registration.office_id= '1' 
 Execution Time:0.0026259422302246

select fname,lname,mrdno from patient_registration where  patient_registration_id='1330' and  office_id= '1' 
 Execution Time:0.00021815299987793

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0028190612792969

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0028190612792969

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0027520656585693

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027642250061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027642250061035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027642250061035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003209114074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027642250061035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003209114074707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027642250061035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003209114074707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027642250061035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003209114074707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075101852416992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027642250061035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003209114074707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075101852416992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051908493041992

select count(*) as cnt from patient_registration where  patient_registration_id= '1330' and  office_id= '1' 
 Execution Time:0.00037884712219238

select count(*) as cnt from patient_registration where  patient_registration_id= '1330' and  office_id= '1' 
 Execution Time:0.00037884712219238

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1330' and  doctors_registration.office_id= '1' 
 Execution Time:0.0046768188476562

select count(*) as cnt from patient_registration where  patient_registration_id= '1330' and  office_id= '1' 
 Execution Time:0.00037884712219238

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1330' and  doctors_registration.office_id= '1' 
 Execution Time:0.0046768188476562

select fname,lname,mrdno from patient_registration where  patient_registration_id='1330' and  office_id= '1' 
 Execution Time:0.0024068355560303

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0025129318237305

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0025129318237305

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0032129287719727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034780502319336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034780502319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031487941741943

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034780502319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031487941741943

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004774808883667

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034780502319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031487941741943

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004774808883667

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015380382537842

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034780502319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031487941741943

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004774808883667

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015380382537842

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031461715698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034780502319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031487941741943

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004774808883667

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015380382537842

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031461715698242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024909973144531

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034780502319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031487941741943

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004774808883667

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015380382537842

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031461715698242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024909973144531

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078892707824707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034780502319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031487941741943

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004774808883667

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015380382537842

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031461715698242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024909973144531

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078892707824707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0082929134368896

select count(*) as cnt from patient_registration where  patient_registration_id= '2753' and  office_id= '1' 
 Execution Time:0.00062084197998047

select count(*) as cnt from patient_registration where  patient_registration_id= '2753' and  office_id= '1' 
 Execution Time:0.00062084197998047

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2753' and  doctors_registration.office_id= '1' 
 Execution Time:0.0028359889984131

select count(*) as cnt from patient_registration where  patient_registration_id= '2753' and  office_id= '1' 
 Execution Time:0.00062084197998047

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2753' and  doctors_registration.office_id= '1' 
 Execution Time:0.0028359889984131

select fname,lname,mrdno from patient_registration where  patient_registration_id='2753' and  office_id= '1' 
 Execution Time:0.0002748966217041

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00030899047851562

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00030899047851562

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00029897689819336

select count(*) as cnt from patient_registration where  patient_registration_id= '1330' and  office_id= '1' 
 Execution Time:0.00074982643127441

select count(*) as cnt from patient_registration where  patient_registration_id= '1330' and  office_id= '1' 
 Execution Time:0.00074982643127441

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1330' and  doctors_registration.office_id= '1' 
 Execution Time:0.0052690505981445

select count(*) as cnt from patient_registration where  patient_registration_id= '1330' and  office_id= '1' 
 Execution Time:0.00074982643127441

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1330' and  doctors_registration.office_id= '1' 
 Execution Time:0.0052690505981445

select fname,lname,mrdno from patient_registration where  patient_registration_id='1330' and  office_id= '1' 
 Execution Time:0.0013389587402344

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.000885009765625

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.000885009765625

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00038313865661621

select count(*) as cnt from patient_registration where  patient_registration_id= '2483' and  office_id= '1' 
 Execution Time:0.00048398971557617

select count(*) as cnt from patient_registration where  patient_registration_id= '2483' and  office_id= '1' 
 Execution Time:0.00048398971557617

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2483' and  doctors_registration.office_id= '1' 
 Execution Time:0.0044751167297363

select count(*) as cnt from patient_registration where  patient_registration_id= '2483' and  office_id= '1' 
 Execution Time:0.00048398971557617

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2483' and  doctors_registration.office_id= '1' 
 Execution Time:0.0044751167297363

select fname,lname,mrdno from patient_registration where  patient_registration_id='2483' and  office_id= '1' 
 Execution Time:0.00032496452331543

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00064301490783691

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00064301490783691

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00032615661621094

select count(*) as cnt from patient_registration where  patient_registration_id= '1615' and  office_id= '1' 
 Execution Time:0.00043511390686035

select count(*) as cnt from patient_registration where  patient_registration_id= '1615' and  office_id= '1' 
 Execution Time:0.00043511390686035

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1615' and  doctors_registration.office_id= '1' 
 Execution Time:0.0043878555297852

select count(*) as cnt from patient_registration where  patient_registration_id= '1615' and  office_id= '1' 
 Execution Time:0.00043511390686035

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1615' and  doctors_registration.office_id= '1' 
 Execution Time:0.0043878555297852

select fname,lname,mrdno from patient_registration where  patient_registration_id='1615' and  office_id= '1' 
 Execution Time:0.00034093856811523

select count(*) as cnt from patient_registration where  patient_registration_id= '1330' and  office_id= '1' 
 Execution Time:0.00040793418884277

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00045680999755859

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00045680999755859

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035786628723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035786628723145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035786628723145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035786628723145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056576728820801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035786628723145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056576728820801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043270587921143

select count(*) as cnt from patient_registration where  patient_registration_id= '1331' and  office_id= '1' 
 Execution Time:0.00055193901062012

select count(*) as cnt from patient_registration where  patient_registration_id= '1331' and  office_id= '1' 
 Execution Time:0.00055193901062012

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1331' and  doctors_registration.office_id= '1' 
 Execution Time:0.0046689510345459

select count(*) as cnt from patient_registration where  patient_registration_id= '1331' and  office_id= '1' 
 Execution Time:0.00055193901062012

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1331' and  doctors_registration.office_id= '1' 
 Execution Time:0.0046689510345459

select fname,lname,mrdno from patient_registration where  patient_registration_id='1331' and  office_id= '1' 
 Execution Time:0.00054001808166504

select count(*) as cnt from patient_registration where  patient_registration_id= '2483' and  office_id= '1' 
 Execution Time:0.00067996978759766

select count(*) as cnt from patient_registration where  patient_registration_id= '2483' and  office_id= '1' 
 Execution Time:0.00067996978759766

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2483' and  doctors_registration.office_id= '1' 
 Execution Time:0.0045089721679688

select count(*) as cnt from patient_registration where  patient_registration_id= '2483' and  office_id= '1' 
 Execution Time:0.00067996978759766

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2483' and  doctors_registration.office_id= '1' 
 Execution Time:0.0045089721679688

select fname,lname,mrdno from patient_registration where  patient_registration_id='2483' and  office_id= '1' 
 Execution Time:0.00057506561279297

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.010987043380737

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.010987043380737

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0081028938293457

select count(*) as cnt from patient_registration where  patient_registration_id= '2344' and  office_id= '1' 
 Execution Time:0.0035941600799561

select count(*) as cnt from patient_registration where  patient_registration_id= '2344' and  office_id= '1' 
 Execution Time:0.0035941600799561

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2344' and  doctors_registration.office_id= '1' 
 Execution Time:0.0078399181365967

select count(*) as cnt from patient_registration where  patient_registration_id= '2344' and  office_id= '1' 
 Execution Time:0.0035941600799561

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2344' and  doctors_registration.office_id= '1' 
 Execution Time:0.0078399181365967

select fname,lname,mrdno from patient_registration where  patient_registration_id='2344' and  office_id= '1' 
 Execution Time:0.0037791728973389

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0007622241973877

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0007622241973877

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0029499530792236

select count(*) as cnt from patient_registration where  patient_registration_id= '2336' and  office_id= '1' 
 Execution Time:0.0016541481018066

select count(*) as cnt from patient_registration where  patient_registration_id= '2336' and  office_id= '1' 
 Execution Time:0.0016541481018066

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2336' and  doctors_registration.office_id= '1' 
 Execution Time:0.0053071975708008

select count(*) as cnt from patient_registration where  patient_registration_id= '2336' and  office_id= '1' 
 Execution Time:0.0016541481018066

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2336' and  doctors_registration.office_id= '1' 
 Execution Time:0.0053071975708008

select fname,lname,mrdno from patient_registration where  patient_registration_id='2336' and  office_id= '1' 
 Execution Time:0.00042295455932617

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00048708915710449

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00048708915710449

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00025701522827148

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00071310997009277

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00071310997009277

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034999847412109

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051999092102051

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051999092102051

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023603439331055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023603439331055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001518726348877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023603439331055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001518726348877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005190372467041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023603439331055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001518726348877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005190372467041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033309459686279

select count(*) as cnt from patient_registration where  patient_registration_id= '1465' and  office_id= '1' 
 Execution Time:0.0009300708770752

select count(*) as cnt from patient_registration where  patient_registration_id= '1465' and  office_id= '1' 
 Execution Time:0.0009300708770752

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1465' and  doctors_registration.office_id= '1' 
 Execution Time:0.0050709247589111

select count(*) as cnt from patient_registration where  patient_registration_id= '1465' and  office_id= '1' 
 Execution Time:0.0009300708770752

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1465' and  doctors_registration.office_id= '1' 
 Execution Time:0.0050709247589111

select fname,lname,mrdno from patient_registration where  patient_registration_id='1465' and  office_id= '1' 
 Execution Time:0.00037288665771484

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00034189224243164

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00034189224243164

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00028300285339355

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050711631774902

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050711631774902

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036501884460449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036501884460449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036501884460449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006859302520752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036501884460449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006859302520752

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053238868713379

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00057697296142578

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00057697296142578

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023102760314941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023102760314941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023102760314941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062203407287598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023102760314941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062203407287598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036590099334717

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020198822021484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020198822021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00080990791320801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020198822021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00080990791320801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063395500183105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020198822021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00080990791320801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063395500183105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00074481964111328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020198822021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00080990791320801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063395500183105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00074481964111328

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020198822021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00080990791320801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063395500183105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00074481964111328

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089693069458008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020198822021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00080990791320801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063395500183105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00074481964111328

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089693069458008

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058228969573975

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011255025863647

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011255025863647

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011255025863647

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003770112991333

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011255025863647

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003770112991333

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011255025863647

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003770112991333

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029568672180176

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011255025863647

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003770112991333

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029568672180176

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.010436058044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011255025863647

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003770112991333

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029568672180176

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.010436058044434

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057711601257324

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00098109245300293

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00098109245300293

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00037097930908203

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075817108154297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075817108154297

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003211498260498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079679489135742

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079679489135742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079679489135742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079679489135742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079679489135742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079679489135742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079679489135742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061488151550293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079679489135742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061488151550293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055551528930664

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0035548210144043

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0035548210144043

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0021610260009766

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00034403800964355

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00034403800964355

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00037598609924316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00079798698425293

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00079798698425293

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061392784118652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034279823303223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034279823303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078389644622803

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034279823303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078389644622803

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029900074005127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034279823303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078389644622803

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029900074005127

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035378932952881

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034279823303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078389644622803

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029900074005127

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035378932952881

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037860870361328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034279823303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078389644622803

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029900074005127

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035378932952881

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037860870361328

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010440349578857

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034279823303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078389644622803

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029900074005127

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035378932952881

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037860870361328

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010440349578857

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038948059082031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034279823303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078389644622803

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029900074005127

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035378932952881

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037860870361328

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010440349578857

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038948059082031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054671764373779

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00077700614929199

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00077700614929199

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00037693977355957

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00046205520629883

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00046205520629883

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00038504600524902

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076603889465332

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076603889465332

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00088405609130859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019021034240723

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019021034240723

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019021034240723

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019021034240723

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024604797363281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012929439544678

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019021034240723

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024604797363281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012929439544678

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019021034240723

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024604797363281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012929439544678

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019021034240723

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024604797363281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012929439544678

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003969669342041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056569576263428

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035381317138672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035381317138672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035381317138672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035381317138672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047111511230469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035381317138672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047111511230469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052559375762939

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064992904663086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064992904663086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047140121459961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.053708076477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.053708076477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068080425262451

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.053708076477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068080425262451

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026488304138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.053708076477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068080425262451

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026488304138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023908615112305

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.053708076477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068080425262451

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026488304138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023908615112305

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0054819583892822

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.053708076477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068080425262451

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026488304138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023908615112305

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0054819583892822

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033390522003174

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.053708076477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068080425262451

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026488304138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023908615112305

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0054819583892822

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033390522003174

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030069351196289

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.053708076477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0068080425262451

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026488304138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023908615112305

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0054819583892822

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033390522003174

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030069351196289

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00050091743469238

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00050091743469238

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00026702880859375

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0016288757324219

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0016288757324219

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0003662109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055503845214844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055503845214844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00070023536682129

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00070023536682129

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034904479980469

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032508373260498

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032508373260498

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0029850006103516

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052490234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052490234375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094819068908691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052490234375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094819068908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052490234375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094819068908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052490234375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094819068908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052490234375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094819068908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052490234375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094819068908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.000640869140625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052490234375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094819068908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.000640869140625

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071480274200439

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057101249694824

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057101249694824

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037479400634766

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0027439594268799

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0027439594268799

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00043511390686035

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015819072723389

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015819072723389

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051088333129883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051088333129883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00301194190979

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051088333129883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00301194190979

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037050247192383

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051088333129883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00301194190979

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037050247192383

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047988891601562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051088333129883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00301194190979

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037050247192383

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047988891601562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003795862197876

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051088333129883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00301194190979

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037050247192383

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047988891601562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003795862197876

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0087981224060059

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051088333129883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00301194190979

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037050247192383

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047988891601562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003795862197876

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0087981224060059

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028657913208008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051088333129883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00301194190979

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037050247192383

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047988891601562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003795862197876

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0087981224060059

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028657913208008

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.016229152679443

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00045084953308105

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00045084953308105

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00036311149597168

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00051689147949219

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00051689147949219

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037097930908203

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00080108642578125

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00080108642578125

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0021169185638428

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054121017456055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054121017456055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054121017456055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054121017456055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051093101501465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054121017456055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051093101501465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054121017456055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051093101501465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054121017456055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051093101501465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021159648895264

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054121017456055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051093101501465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021159648895264

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061149597167969

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0013129711151123

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0013129711151123

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0011930465698242

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063109397888184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063109397888184

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036907196044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015711784362793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015711784362793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017881393432617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015711784362793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017881393432617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015711784362793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017881393432617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036811828613281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015711784362793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017881393432617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036811828613281

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005141019821167

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057311058044434

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057311058044434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057311058044434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.002202033996582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057311058044434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.002202033996582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057311058044434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.002202033996582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0012791156768799

select count(*) as cnt from patient_registration where  patient_registration_id= '2344' and  office_id= '1' 
 Execution Time:0.00051307678222656

select count(*) as cnt from patient_registration where  patient_registration_id= '2344' and  office_id= '1' 
 Execution Time:0.00051307678222656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2344' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033318996429443

select count(*) as cnt from patient_registration where  patient_registration_id= '2344' and  office_id= '1' 
 Execution Time:0.00051307678222656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2344' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033318996429443

select fname,lname,mrdno from patient_registration where  patient_registration_id='2344' and  office_id= '1' 
 Execution Time:0.00023102760314941

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0015110969543457

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0015110969543457

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00079607963562012

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.00081610679626465

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0061428546905518

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0061428546905518

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0012631416320801

select count(*) as cnt from patient_registration where  patient_registration_id= '1711' and  office_id= '1' 
 Execution Time:0.00038409233093262

select count(*) as cnt from patient_registration where  patient_registration_id= '1711' and  office_id= '1' 
 Execution Time:0.00038409233093262

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1711' and  doctors_registration.office_id= '1' 
 Execution Time:0.0065460205078125

select count(*) as cnt from patient_registration where  patient_registration_id= '1711' and  office_id= '1' 
 Execution Time:0.00038409233093262

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1711' and  doctors_registration.office_id= '1' 
 Execution Time:0.0065460205078125

select fname,lname,mrdno from patient_registration where  patient_registration_id='1711' and  office_id= '1' 
 Execution Time:0.00370192527771

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032901763916016

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032901763916016

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027918815612793

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00070691108703613

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00070691108703613

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0002589225769043

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0018138885498047

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0018138885498047

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0029480457305908

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013570785522461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013570785522461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045828819274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013570785522461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045828819274902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037798881530762

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013570785522461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045828819274902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037798881530762

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032551288604736

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013570785522461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045828819274902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037798881530762

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032551288604736

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0043120384216309

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013570785522461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045828819274902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037798881530762

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032551288604736

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0043120384216309

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003788948059082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013570785522461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045828819274902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037798881530762

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032551288604736

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0043120384216309

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003788948059082

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037620067596436

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013570785522461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045828819274902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037798881530762

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032551288604736

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0043120384216309

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003788948059082

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037620067596436

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0093209743499756

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053341388702393

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053341388702393

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053341388702393

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053341388702393

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053341388702393

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00018882751464844

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0012631416320801

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0012631416320801

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0028371810913086

select count(*) as cnt from billing_master where  billing_master_id= '476' and  office_id= '1' 
 Execution Time:0.00042605400085449

select count(*) as cnt from billing_master where  billing_master_id= '476' and  office_id= '1' 
 Execution Time:0.00042605400085449

select * from billing_master where  billing_master_id= '476' and  office_id= '1' 
 Execution Time:0.00037598609924316

select count(*) as cnt from billing_master where  billing_master_id= '476' and  office_id= '1' 
 Execution Time:0.00042605400085449

select * from billing_master where  billing_master_id= '476' and  office_id= '1' 
 Execution Time:0.00037598609924316

select * from billing_detail where  billing_master_id= '476' 
 Execution Time:0.00063681602478027

select count(*) as cnt from billing_master where  billing_master_id= '476' and  office_id= '1' 
 Execution Time:0.00042605400085449

select * from billing_master where  billing_master_id= '476' and  office_id= '1' 
 Execution Time:0.00037598609924316

select * from billing_detail where  billing_master_id= '476' 
 Execution Time:0.00063681602478027

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.00027108192443848

select count(*) as cnt from patient_registration where  patient_registration_id= '2344' and  office_id= '1' 
 Execution Time:0.00052690505981445

select count(*) as cnt from patient_registration where  patient_registration_id= '2344' and  office_id= '1' 
 Execution Time:0.00052690505981445

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2344' and  doctors_registration.office_id= '1' 
 Execution Time:0.0034680366516113

select count(*) as cnt from patient_registration where  patient_registration_id= '2344' and  office_id= '1' 
 Execution Time:0.00052690505981445

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2344' and  doctors_registration.office_id= '1' 
 Execution Time:0.0034680366516113

select fname,lname,mrdno from patient_registration where  patient_registration_id='2344' and  office_id= '1' 
 Execution Time:0.00027894973754883

select count(*) as cnt from patient_registration where  patient_registration_id= '2344' and  office_id= '1' 
 Execution Time:0.0019290447235107

select count(*) as cnt from patient_registration where  patient_registration_id= '2344' and  office_id= '1' 
 Execution Time:0.0019290447235107

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2344' and  doctors_registration.office_id= '1' 
 Execution Time:0.0047171115875244

select count(*) as cnt from patient_registration where  patient_registration_id= '2344' and  office_id= '1' 
 Execution Time:0.0019290447235107

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2344' and  doctors_registration.office_id= '1' 
 Execution Time:0.0047171115875244

select fname,lname,mrdno from patient_registration where  patient_registration_id='2344' and  office_id= '1' 
 Execution Time:0.0017678737640381

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0010561943054199

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0010561943054199

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034189224243164

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066995620727539

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066995620727539

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.009660005569458

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.009660005569458

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0056757926940918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.009660005569458

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0056757926940918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019650459289551

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.009660005569458

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0056757926940918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019650459289551

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.006209135055542

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.009660005569458

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0056757926940918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019650459289551

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.006209135055542

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0050990581512451

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033283233642578

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033283233642578

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052461624145508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052461624145508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010027885437012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052461624145508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010027885437012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010409355163574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052461624145508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010027885437012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010409355163574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018219947814941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052461624145508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010027885437012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010409355163574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018219947814941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036401748657227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052461624145508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010027885437012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010409355163574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018219947814941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036401748657227

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026519298553467

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052461624145508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010027885437012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010409355163574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018219947814941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036401748657227

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026519298553467

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015151500701904

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052461624145508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010027885437012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010409355163574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018219947814941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036401748657227

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026519298553467

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015151500701904

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078518390655518

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033378601074219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033378601074219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019192695617676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033378601074219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019192695617676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027170181274414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033378601074219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019192695617676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027170181274414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033378601074219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019192695617676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027170181274414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032601356506348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033378601074219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019192695617676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027170181274414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032601356506348

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0086510181427002

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056431293487549

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056431293487549

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056431293487549

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056431293487549

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00017189979553223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056431293487549

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00017189979553223

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070281028747559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070281028747559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070281028747559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070281028747559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070281028747559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select count(*) as cnt from patient_registration where  patient_registration_id= '2927' and  office_id= '1' 
 Execution Time:0.00040102005004883

select count(*) as cnt from patient_registration where  patient_registration_id= '2927' and  office_id= '1' 
 Execution Time:0.00040102005004883

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2927' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048470497131348

select count(*) as cnt from patient_registration where  patient_registration_id= '2927' and  office_id= '1' 
 Execution Time:0.00040102005004883

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2927' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048470497131348

select fname,lname,mrdno from patient_registration where  patient_registration_id='2927' and  office_id= '1' 
 Execution Time:0.0033040046691895

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0078060626983643

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0078060626983643

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0017340183258057

select * from investigation where  investigation_id=11  and office_id= 1 and status=1 
 Execution Time:0.00073504447937012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061080455780029

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061080455780029

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007481575012207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061080455780029

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007481575012207

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061080455780029

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007481575012207

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061080455780029

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007481575012207

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select count(*) as cnt from patient_registration where  patient_registration_id= '2336' and  office_id= '1' 
 Execution Time:0.00044679641723633

select count(*) as cnt from patient_registration where  patient_registration_id= '2336' and  office_id= '1' 
 Execution Time:0.00044679641723633

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2336' and  doctors_registration.office_id= '1' 
 Execution Time:0.0046839714050293

select count(*) as cnt from patient_registration where  patient_registration_id= '2336' and  office_id= '1' 
 Execution Time:0.00044679641723633

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2336' and  doctors_registration.office_id= '1' 
 Execution Time:0.0046839714050293

select fname,lname,mrdno from patient_registration where  patient_registration_id='2336' and  office_id= '1' 
 Execution Time:0.001194953918457

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00061511993408203

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00061511993408203

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040793418884277

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00075697898864746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046350955963135

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046350955963135

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046350955963135

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046350955963135

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046350955963135

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031719207763672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031719207763672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067520141601562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031719207763672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067520141601562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018429756164551

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031719207763672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067520141601562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018429756164551

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087213516235352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031719207763672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067520141601562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018429756164551

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087213516235352

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027499198913574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031719207763672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067520141601562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018429756164551

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087213516235352

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027499198913574

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0079798698425293

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050616264343262

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050616264343262

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030612945556641

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0009920597076416

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0009920597076416

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003361701965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010977983474731

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010977983474731

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010977983474731

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076985359191895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010977983474731

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076985359191895

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010977983474731

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076985359191895

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010977983474731

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076985359191895

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080680847167969

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010977983474731

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076985359191895

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080680847167969

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010008811950684

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010977983474731

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076985359191895

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080680847167969

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010008811950684

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065851211547852

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010168552398682

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010168552398682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010168552398682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010168552398682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065302848815918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010168552398682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065302848815918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010979175567627

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010168552398682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065302848815918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010979175567627

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010168552398682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065302848815918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010979175567627

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008690357208252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010168552398682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065302848815918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010979175567627

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008690357208252

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0075249671936035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036501884460449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036501884460449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036501884460449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061607360839844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036501884460449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061607360839844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058879852294922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010519027709961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010519027709961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010519027709961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010519027709961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010519027709961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010519027709961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088810920715332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010519027709961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088810920715332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062630176544189

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052151679992676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052151679992676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052151679992676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00089693069458008

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052151679992676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00089693069458008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052151679992676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00089693069458008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select count(*) as cnt from patient_registration where  patient_registration_id= '2793' and  office_id= '1' 
 Execution Time:0.0003972053527832

select count(*) as cnt from patient_registration where  patient_registration_id= '2793' and  office_id= '1' 
 Execution Time:0.0003972053527832

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2793' and  doctors_registration.office_id= '1' 
 Execution Time:0.0056948661804199

select count(*) as cnt from patient_registration where  patient_registration_id= '2793' and  office_id= '1' 
 Execution Time:0.0003972053527832

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2793' and  doctors_registration.office_id= '1' 
 Execution Time:0.0056948661804199

select fname,lname,mrdno from patient_registration where  patient_registration_id='2793' and  office_id= '1' 
 Execution Time:0.00038695335388184

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00061798095703125

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00061798095703125

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030803680419922

select * from ipdcharge where  ipdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00051784515380859

select * from ipdcharge where  ipdcharge_id=11  and office_id= 1 and status=1 
 Execution Time:0.00067901611328125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034098625183105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034098625183105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034098625183105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034098625183105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034098625183105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044369697570801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044369697570801

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010480880737305

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044369697570801

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010480880737305

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044369697570801

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010480880737305

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044369697570801

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010480880737305

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select count(*) as cnt from patient_registration where  patient_registration_id= '1465' and  office_id= '1' 
 Execution Time:0.0043931007385254

select count(*) as cnt from patient_registration where  patient_registration_id= '1465' and  office_id= '1' 
 Execution Time:0.0043931007385254

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1465' and  doctors_registration.office_id= '1' 
 Execution Time:0.0063419342041016

select count(*) as cnt from patient_registration where  patient_registration_id= '1465' and  office_id= '1' 
 Execution Time:0.0043931007385254

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1465' and  doctors_registration.office_id= '1' 
 Execution Time:0.0063419342041016

select fname,lname,mrdno from patient_registration where  patient_registration_id='1465' and  office_id= '1' 
 Execution Time:0.0017859935760498

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0020468235015869

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0020468235015869

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0022790431976318

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0034289360046387

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069880485534668

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069880485534668

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069880485534668

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069880485534668

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069880485534668

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019748210906982

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019748210906982

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072216987609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019748210906982

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072216987609863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019748210906982

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072216987609863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0056490898132324

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019748210906982

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072216987609863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0056490898132324

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019748210906982

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072216987609863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0056490898132324

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036001205444336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019328594207764

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019748210906982

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072216987609863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0056490898132324

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036001205444336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019328594207764

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092101097106934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019748210906982

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072216987609863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0056490898132324

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036001205444336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019328594207764

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092101097106934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058999061584473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020980834960938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020980834960938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020980834960938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020980834960938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020980834960938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037503242492676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058178901672363

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00075697898864746

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00075697898864746

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00025200843811035

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00087690353393555

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00087690353393555

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003209114074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063705444335938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063705444335938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063705444335938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063705444335938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010499954223633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063705444335938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010499954223633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040459632873535

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00062704086303711

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00062704086303711

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00027298927307129

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081396102905273

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081396102905273

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034284591674805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049686431884766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049686431884766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049686431884766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049686431884766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050020217895508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049686431884766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050020217895508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058548450469971

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034148693084717

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034148693084717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034148693084717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034148693084717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034148693084717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select count(*) as cnt from patient_registration where  patient_registration_id= '2483' and  office_id= '1' 
 Execution Time:0.00047612190246582

select count(*) as cnt from patient_registration where  patient_registration_id= '2483' and  office_id= '1' 
 Execution Time:0.00047612190246582

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2483' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025620460510254

select count(*) as cnt from patient_registration where  patient_registration_id= '2483' and  office_id= '1' 
 Execution Time:0.00047612190246582

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2483' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025620460510254

select fname,lname,mrdno from patient_registration where  patient_registration_id='2483' and  office_id= '1' 
 Execution Time:0.00020503997802734

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0008540153503418

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0008540153503418

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041317939758301

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00059604644775391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038020610809326

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038020610809326

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038020610809326

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038020610809326

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038020610809326

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028896331787109

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028896331787109

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00020313262939453

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036501884460449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036501884460449

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043511390686035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043511390686035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035080909729004

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018191337585449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018191337585449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001978874206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018191337585449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001978874206543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014781951904297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018191337585449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001978874206543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014781951904297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00026988983154297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018191337585449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001978874206543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014781951904297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00026988983154297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041608810424805

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030899047851562

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030899047851562

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.001209020614624

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001384973526001

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001384973526001

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019629001617432

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019629001617432

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019629001617432

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019629001617432

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002901554107666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019629001617432

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002901554107666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019629001617432

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002901554107666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019629001617432

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002901554107666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061297416687012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019629001617432

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002901554107666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061297416687012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0092158317565918

select count(*) as cnt from patient_registration where  patient_registration_id= '2711' and  office_id= '1' 
 Execution Time:0.00037312507629395

select count(*) as cnt from patient_registration where  patient_registration_id= '2711' and  office_id= '1' 
 Execution Time:0.00037312507629395

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2711' and  doctors_registration.office_id= '1' 
 Execution Time:0.0045559406280518

select count(*) as cnt from patient_registration where  patient_registration_id= '2711' and  office_id= '1' 
 Execution Time:0.00037312507629395

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2711' and  doctors_registration.office_id= '1' 
 Execution Time:0.0045559406280518

select fname,lname,mrdno from patient_registration where  patient_registration_id='2711' and  office_id= '1' 
 Execution Time:0.003666877746582

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037693977355957

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037693977355957

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00033807754516602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038590431213379

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038590431213379

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038590431213379

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038590431213379

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038590431213379

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033116340637207

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033116340637207

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00027298927307129

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00061202049255371

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00061202049255371

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00024104118347168

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043392181396484

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043392181396484

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013620853424072

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013620853424072

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013549327850342

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013620853424072

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013549327850342

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088405609130859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013620853424072

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013549327850342

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088405609130859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0077669620513916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013620853424072

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013549327850342

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088405609130859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0077669620513916

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013899803161621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013620853424072

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013549327850342

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088405609130859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0077669620513916

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013899803161621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013620853424072

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013549327850342

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088405609130859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0077669620513916

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013899803161621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015318393707275

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013620853424072

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013549327850342

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088405609130859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0077669620513916

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013899803161621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015318393707275

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061640739440918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059890747070312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059890747070312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059890747070312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059890747070312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059890747070312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select count(*) as cnt from patient_registration where  patient_registration_id= '13' and  office_id= '1' 
 Execution Time:0.00047898292541504

select count(*) as cnt from patient_registration where  patient_registration_id= '13' and  office_id= '1' 
 Execution Time:0.00047898292541504

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='13' and  doctors_registration.office_id= '1' 
 Execution Time:0.0026638507843018

select count(*) as cnt from patient_registration where  patient_registration_id= '13' and  office_id= '1' 
 Execution Time:0.00047898292541504

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='13' and  doctors_registration.office_id= '1' 
 Execution Time:0.0026638507843018

select fname,lname,mrdno from patient_registration where  patient_registration_id='13' and  office_id= '1' 
 Execution Time:0.00024294853210449

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00095009803771973

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00095009803771973

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045895576477051

select * from ipdcharge where  ipdcharge_id=3  and office_id= 1 and status=1 
 Execution Time:0.00059294700622559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052700042724609

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052700042724609

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052700042724609

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052700042724609

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052700042724609

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0031819343566895

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0031819343566895

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0028669834136963

select count(*) as cnt from billing_master where  billing_master_id= '482' and  office_id= '1' 
 Execution Time:0.00052094459533691

select count(*) as cnt from billing_master where  billing_master_id= '482' and  office_id= '1' 
 Execution Time:0.00052094459533691

select * from billing_master where  billing_master_id= '482' and  office_id= '1' 
 Execution Time:0.00027012825012207

select count(*) as cnt from billing_master where  billing_master_id= '482' and  office_id= '1' 
 Execution Time:0.00052094459533691

select * from billing_master where  billing_master_id= '482' and  office_id= '1' 
 Execution Time:0.00027012825012207

select * from billing_detail where  billing_master_id= '482' 
 Execution Time:0.00079917907714844

select count(*) as cnt from billing_master where  billing_master_id= '482' and  office_id= '1' 
 Execution Time:0.00052094459533691

select * from billing_master where  billing_master_id= '482' and  office_id= '1' 
 Execution Time:0.00027012825012207

select * from billing_detail where  billing_master_id= '482' 
 Execution Time:0.00079917907714844

select * from ipdcharge where  ipdcharge_id=3  and office_id= 1 and status=1 
 Execution Time:0.00041103363037109

select count(*) as cnt from patient_registration where  patient_registration_id= '13' and  office_id= '1' 
 Execution Time:0.00048112869262695

select count(*) as cnt from patient_registration where  patient_registration_id= '13' and  office_id= '1' 
 Execution Time:0.00048112869262695

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='13' and  doctors_registration.office_id= '1' 
 Execution Time:0.0044260025024414

select count(*) as cnt from patient_registration where  patient_registration_id= '13' and  office_id= '1' 
 Execution Time:0.00048112869262695

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='13' and  doctors_registration.office_id= '1' 
 Execution Time:0.0044260025024414

select fname,lname,mrdno from patient_registration where  patient_registration_id='13' and  office_id= '1' 
 Execution Time:0.00029802322387695

select count(*) as cnt from patient_registration where  patient_registration_id= '2921' and  office_id= '1' 
 Execution Time:0.00035810470581055

select count(*) as cnt from patient_registration where  patient_registration_id= '2921' and  office_id= '1' 
 Execution Time:0.00035810470581055

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2921' and  doctors_registration.office_id= '1' 
 Execution Time:0.0045261383056641

select count(*) as cnt from patient_registration where  patient_registration_id= '2921' and  office_id= '1' 
 Execution Time:0.00035810470581055

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2921' and  doctors_registration.office_id= '1' 
 Execution Time:0.0045261383056641

select fname,lname,mrdno from patient_registration where  patient_registration_id='2921' and  office_id= '1' 
 Execution Time:0.00036215782165527

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038130283355713

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038130283355713

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038130283355713

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038130283355713

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038130283355713

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.003939151763916

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.003939151763916

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.004817008972168

select count(*) as cnt from billing_master where  billing_master_id= '482' and  office_id= '1' 
 Execution Time:0.0020990371704102

select count(*) as cnt from billing_master where  billing_master_id= '482' and  office_id= '1' 
 Execution Time:0.0020990371704102

select * from billing_master where  billing_master_id= '482' and  office_id= '1' 
 Execution Time:0.00029897689819336

select count(*) as cnt from billing_master where  billing_master_id= '482' and  office_id= '1' 
 Execution Time:0.0020990371704102

select * from billing_master where  billing_master_id= '482' and  office_id= '1' 
 Execution Time:0.00029897689819336

select * from billing_detail where  billing_master_id= '482' 
 Execution Time:0.0011069774627686

select count(*) as cnt from billing_master where  billing_master_id= '482' and  office_id= '1' 
 Execution Time:0.0020990371704102

select * from billing_master where  billing_master_id= '482' and  office_id= '1' 
 Execution Time:0.00029897689819336

select * from billing_detail where  billing_master_id= '482' 
 Execution Time:0.0011069774627686

select * from ipdcharge where  ipdcharge_id=3  and office_id= 1 and status=1 
 Execution Time:0.00067496299743652

select count(*) as cnt from patient_registration where  patient_registration_id= '2921' and  office_id= '1' 
 Execution Time:0.00037407875061035

select count(*) as cnt from patient_registration where  patient_registration_id= '2921' and  office_id= '1' 
 Execution Time:0.00037407875061035

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2921' and  doctors_registration.office_id= '1' 
 Execution Time:0.003666877746582

select count(*) as cnt from patient_registration where  patient_registration_id= '2921' and  office_id= '1' 
 Execution Time:0.00037407875061035

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2921' and  doctors_registration.office_id= '1' 
 Execution Time:0.003666877746582

select fname,lname,mrdno from patient_registration where  patient_registration_id='2921' and  office_id= '1' 
 Execution Time:0.00024294853210449

select count(*) as cnt from patient_registration where  patient_registration_id= '2921' and  office_id= '1' 
 Execution Time:0.00052595138549805

select count(*) as cnt from patient_registration where  patient_registration_id= '2921' and  office_id= '1' 
 Execution Time:0.00052595138549805

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2921' and  doctors_registration.office_id= '1' 
 Execution Time:0.0046370029449463

select count(*) as cnt from patient_registration where  patient_registration_id= '2921' and  office_id= '1' 
 Execution Time:0.00052595138549805

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2921' and  doctors_registration.office_id= '1' 
 Execution Time:0.0046370029449463

select fname,lname,mrdno from patient_registration where  patient_registration_id='2921' and  office_id= '1' 
 Execution Time:0.00042200088500977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037479400634766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037479400634766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037479400634766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022077560424805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037479400634766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022077560424805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037479400634766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022077560424805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00068902969360352

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00068902969360352

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049304962158203

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0068039894104004

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0068039894104004

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00087904930114746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066184997558594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066184997558594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066184997558594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031113624572754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066184997558594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031113624572754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066184997558594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031113624572754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019371509552002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066184997558594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031113624572754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019371509552002

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091695785522461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066184997558594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031113624572754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019371509552002

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091695785522461

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053799152374268

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0043430328369141

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0043430328369141

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039100646972656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039100646972656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039100646972656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060200691223145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039100646972656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060200691223145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054440498352051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047492980957031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047492980957031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047492980957031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047492980957031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059986114501953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047492980957031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059986114501953

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058808326721191

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056910514831543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056910514831543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062088966369629

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039196014404297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039196014404297

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037429332733154

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037429332733154

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041031837463379

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037429332733154

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041031837463379

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037181377410889

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037429332733154

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041031837463379

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037181377410889

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00096797943115234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037429332733154

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041031837463379

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037181377410889

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00096797943115234

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037908554077148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037429332733154

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041031837463379

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037181377410889

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00096797943115234

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037908554077148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038211345672607

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037429332733154

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041031837463379

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037181377410889

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00096797943115234

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037908554077148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038211345672607

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034430027008057

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037429332733154

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041031837463379

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037181377410889

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00096797943115234

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037908554077148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038211345672607

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034430027008057

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055530071258545

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063869953155518

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063869953155518

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003108024597168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063869953155518

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003108024597168

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0032558441162109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063869953155518

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003108024597168

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0032558441162109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0022299289703369

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063869953155518

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003108024597168

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0032558441162109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0022299289703369

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0026848316192627

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033419132232666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033419132232666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039999485015869

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033419132232666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039999485015869

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038378238677979

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033419132232666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039999485015869

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038378238677979

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086498260498047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033419132232666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039999485015869

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038378238677979

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086498260498047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038609504699707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033419132232666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039999485015869

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038378238677979

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086498260498047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038609504699707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038430690765381

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033419132232666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039999485015869

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038378238677979

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086498260498047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038609504699707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038430690765381

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032498836517334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033419132232666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039999485015869

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038378238677979

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086498260498047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038609504699707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038430690765381

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032498836517334

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062680244445801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056629180908203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056629180908203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056629180908203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0017280578613281

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056629180908203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0017280578613281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0023839473724365

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056629180908203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0017280578613281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0023839473724365

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00080394744873047

select count(*) as cnt from patient_registration where  patient_registration_id= '1615' and  office_id= '1' 
 Execution Time:0.00086688995361328

select count(*) as cnt from patient_registration where  patient_registration_id= '1615' and  office_id= '1' 
 Execution Time:0.00086688995361328

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1615' and  doctors_registration.office_id= '1' 
 Execution Time:0.0054008960723877

select count(*) as cnt from patient_registration where  patient_registration_id= '1615' and  office_id= '1' 
 Execution Time:0.00086688995361328

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1615' and  doctors_registration.office_id= '1' 
 Execution Time:0.0054008960723877

select fname,lname,mrdno from patient_registration where  patient_registration_id='1615' and  office_id= '1' 
 Execution Time:0.0042099952697754

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00080084800720215

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00080084800720215

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056004524230957

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.00084590911865234

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.014116048812866

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.014116048812866

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0008089542388916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.014116048812866

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0008089542388916

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0048480033874512

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.014116048812866

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0008089542388916

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0048480033874512

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0035529136657715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.014116048812866

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0008089542388916

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0048480033874512

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0035529136657715

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.003896951675415

select count(*) as cnt from patient_registration where  patient_registration_id= '2753' and  office_id= '1' 
 Execution Time:0.00038409233093262

select count(*) as cnt from patient_registration where  patient_registration_id= '2753' and  office_id= '1' 
 Execution Time:0.00038409233093262

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2753' and  doctors_registration.office_id= '1' 
 Execution Time:0.0044639110565186

select count(*) as cnt from patient_registration where  patient_registration_id= '2753' and  office_id= '1' 
 Execution Time:0.00038409233093262

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2753' and  doctors_registration.office_id= '1' 
 Execution Time:0.0044639110565186

select fname,lname,mrdno from patient_registration where  patient_registration_id='2753' and  office_id= '1' 
 Execution Time:0.00034999847412109

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065302848815918

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065302848815918

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050497055053711

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0058162212371826

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047740936279297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047740936279297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043489933013916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047740936279297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043489933013916

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011320114135742

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047740936279297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043489933013916

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011320114135742

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0032000541687012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047740936279297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043489933013916

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011320114135742

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0032000541687012

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0017759799957275

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0004880428314209

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0004880428314209

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00023388862609863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011401176452637

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011401176452637

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042486190795898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076079368591309

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076079368591309

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076079368591309

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076079368591309

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076079368591309

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076079368591309

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076079368591309

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045895576477051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033149719238281

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004796028137207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004796028137207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075483322143555

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004796028137207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075483322143555

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004796028137207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075483322143555

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004796028137207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075483322143555

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0010368824005127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047421455383301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047421455383301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047421455383301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015091896057129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047421455383301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015091896057129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015115737915039

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047421455383301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015091896057129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015115737915039

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00014686584472656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047421455383301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015091896057129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015115737915039

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00014686584472656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047421455383301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015091896057129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015115737915039

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00014686584472656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034213066101074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047421455383301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015091896057129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015115737915039

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00014686584472656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034213066101074

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037221908569336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031628608703613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031628608703613

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031628608703613

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031628608703613

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031628608703613

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00026106834411621

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043659210205078

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062570571899414

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062570571899414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062570571899414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062570571899414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062570571899414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.010448932647705

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070071220397949

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070071220397949

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070071220397949

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070071220397949

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070071220397949

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0038120746612549

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0031599998474121

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0038120746612549

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0031599998474121

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0027840137481689

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0038120746612549

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0031599998474121

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0027840137481689

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 61 
 Execution Time:0.00069689750671387

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 86 
 Execution Time:0.0003819465637207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select * from examination where examination_id= '29' and   office_id= '1' 
 Execution Time:0.00095891952514648

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067281723022461

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 29 
 Execution Time:0.0074501037597656

select * from examination_chargesdetails where  examination_id= '29' 
 Execution Time:0.003244161605835

select * from examination where examination_id= '29' and   office_id= '1' 
 Execution Time:0.00095891952514648

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067281723022461

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 29 
 Execution Time:0.0074501037597656

select * from examination_chargesdetails where  examination_id= '29' 
 Execution Time:0.003244161605835

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0029101371765137

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00076985359191895

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00076985359191895

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034809112548828

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00043797492980957

SELECT *
FROM `examination`
WHERE `examination_id` = 29 
 Execution Time:0.00056600570678711

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00022196769714355

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.0003199577331543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 61 
 Execution Time:0.00016498565673828

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.0012049674987793

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=29 
 Execution Time:0.00059604644775391

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=29 
 Execution Time:0.00055193901062012

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=29 
 Execution Time:0.00049090385437012

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=29 
 Execution Time:0.00059604644775391

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='29' and office_id='1' 
 Execution Time:0.00062894821166992

select * from examination_chargesdetails where  examination_id= '29' 
 Execution Time:0.00040602684020996

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00043797492980957

SELECT *
FROM `examination`
WHERE `examination_id` = 29 
 Execution Time:0.00056600570678711

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00022196769714355

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.0003199577331543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 61 
 Execution Time:0.00016498565673828

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.0012049674987793

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=29 
 Execution Time:0.00059604644775391

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=29 
 Execution Time:0.00055193901062012

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=29 
 Execution Time:0.00049090385437012

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=29 
 Execution Time:0.00059604644775391

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='29' and office_id='1' 
 Execution Time:0.00062894821166992

select * from examination_chargesdetails where  examination_id= '29' 
 Execution Time:0.00040602684020996

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00023102760314941

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00099015235900879

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00099015235900879

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0014421939849854

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00099015235900879

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0014421939849854

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 61 
 Execution Time:0.00029802322387695

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 86 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select * from examination where examination_id= '29' and   office_id= '1' 
 Execution Time:0.00098800659179688

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 29 
 Execution Time:0.0013320446014404

select * from examination_chargesdetails where  examination_id= '29' 
 Execution Time:0.0010309219360352

select * from examination where examination_id= '29' and   office_id= '1' 
 Execution Time:0.00098800659179688

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 29 
 Execution Time:0.0013320446014404

select * from examination_chargesdetails where  examination_id= '29' 
 Execution Time:0.0010309219360352

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.001046895980835

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044918060302734

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044918060302734

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00028085708618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002173900604248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002173900604248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016498565673828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002173900604248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016498565673828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023109912872314

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002173900604248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016498565673828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023109912872314

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040221214294434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002173900604248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016498565673828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023109912872314

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040221214294434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013332366943359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002173900604248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016498565673828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023109912872314

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040221214294434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013332366943359

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002173900604248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016498565673828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023109912872314

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040221214294434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013332366943359

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015609264373779

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002173900604248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016498565673828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023109912872314

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040221214294434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013332366943359

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015609264373779

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047769546508789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043797492980957

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043797492980957

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00020813941955566

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00055599212646484

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00055599212646484

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003199577331543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040507316589355

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040507316589355

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022411346435547


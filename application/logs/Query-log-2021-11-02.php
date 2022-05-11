select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028231143951416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028231143951416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052380561828613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028231143951416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052380561828613

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0025851726531982

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028231143951416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052380561828613

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0025851726531982

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0021331310272217

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-01' and  '2021-11-01' and  billing_master.office_id= 1        
 Execution Time:0.0014619827270508

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-01' and  '2021-11-01' and  billing_master.office_id= 1        
 Execution Time:0.0014619827270508

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-11-01' and '2021-11-01' and  patient_registration.office_id= 1      
 Execution Time:0.0083279609680176

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038158893585205

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038158893585205

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028162002563477

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038158893585205

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028162002563477

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024838447570801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038158893585205

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028162002563477

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024838447570801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048398971557617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038158893585205

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028162002563477

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024838447570801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048398971557617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0075881481170654

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038158893585205

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028162002563477

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024838447570801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048398971557617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0075881481170654

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050878524780273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038158893585205

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028162002563477

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024838447570801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048398971557617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0075881481170654

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050878524780273

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026559829711914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038158893585205

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028162002563477

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024838447570801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048398971557617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0075881481170654

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050878524780273

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026559829711914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029449462890625

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00044608116149902

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00044608116149902

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00024104118347168

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00070500373840332

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00070500373840332

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029778480529785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029778480529785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029778480529785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017905235290527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029778480529785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017905235290527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029778480529785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017905235290527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029778480529785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017905235290527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065517425537109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029778480529785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017905235290527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065517425537109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024709701538086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025959014892578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025959014892578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025959014892578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025959014892578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025959014892578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select count(*) as cnt from patient_registration where  patient_registration_id= '2063' and  office_id= '1' 
 Execution Time:0.00049901008605957

select count(*) as cnt from patient_registration where  patient_registration_id= '2063' and  office_id= '1' 
 Execution Time:0.00049901008605957

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2063' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033571720123291

select count(*) as cnt from patient_registration where  patient_registration_id= '2063' and  office_id= '1' 
 Execution Time:0.00049901008605957

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2063' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033571720123291

select fname,lname,mrdno from patient_registration where  patient_registration_id='2063' and  office_id= '1' 
 Execution Time:0.00043702125549316

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0023488998413086

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0023488998413086

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00031709671020508

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.003364086151123

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042579174041748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042579174041748

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042579174041748

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042579174041748

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042579174041748

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051212310791016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051212310791016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038888454437256

select count(*) as cnt from patient_registration where  patient_registration_id= '613' and  office_id= '1' 
 Execution Time:0.00056695938110352

select count(*) as cnt from patient_registration where  patient_registration_id= '613' and  office_id= '1' 
 Execution Time:0.00056695938110352

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='613' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033929347991943

select count(*) as cnt from patient_registration where  patient_registration_id= '613' and  office_id= '1' 
 Execution Time:0.00056695938110352

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='613' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033929347991943

select fname,lname,mrdno from patient_registration where  patient_registration_id='613' and  office_id= '1' 
 Execution Time:0.00044798851013184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044989585876465

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044989585876465

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001978874206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001978874206543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001978874206543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001978874206543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016188621520996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001978874206543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016188621520996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037980079650879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001978874206543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016188621520996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037980079650879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023319721221924

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00040888786315918

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00040888786315918

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00023603439331055

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006561279296875

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006561279296875

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033807754516602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.000244140625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.000244140625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.000244140625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.000244140625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054478645324707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.000244140625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054478645324707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023200511932373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011587142944336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011587142944336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012493133544922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011587142944336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012493133544922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011587142944336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012493133544922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013208389282227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011587142944336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012493133544922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013208389282227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011587142944336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012493133544922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013208389282227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00026702880859375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023219585418701

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014078617095947

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014078617095947

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014078617095947

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004889965057373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038371086120605

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00047206878662109

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00047206878662109

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029397010803223

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00077605247497559

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00077605247497559

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005648136138916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005648136138916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042991638183594

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038809776306152

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038809776306152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038809776306152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011708736419678

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038809776306152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011708736419678

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038809776306152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011708736419678

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select count(*) as cnt from patient_registration where  patient_registration_id= '2065' and  office_id= '1' 
 Execution Time:0.00034499168395996

select count(*) as cnt from patient_registration where  patient_registration_id= '2065' and  office_id= '1' 
 Execution Time:0.00034499168395996

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2065' and  doctors_registration.office_id= '1' 
 Execution Time:0.0019631385803223

select count(*) as cnt from patient_registration where  patient_registration_id= '2065' and  office_id= '1' 
 Execution Time:0.00034499168395996

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2065' and  doctors_registration.office_id= '1' 
 Execution Time:0.0019631385803223

select fname,lname,mrdno from patient_registration where  patient_registration_id='2065' and  office_id= '1' 
 Execution Time:0.00022506713867188

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00090789794921875

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00090789794921875

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042510032653809

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00087404251098633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038509368896484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038509368896484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023939609527588

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038509368896484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023939609527588

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00058579444885254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038509368896484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023939609527588

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00058579444885254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038509368896484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023939609527588

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00058579444885254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073003768920898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073003768920898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041799545288086

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.003619909286499

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.003619909286499

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0026910305023193

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038340091705322

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038340091705322

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0043480396270752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004730224609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004730224609375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004730224609375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004730224609375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043821334838867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004730224609375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043821334838867

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025660991668701

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.003964900970459

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.003964900970459

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00046706199645996

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043106079101562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043106079101562

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034284591674805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026512145996094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026512145996094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026512145996094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026512145996094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046110153198242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026512145996094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046110153198242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044679641723633

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0008690357208252

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0008690357208252

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0027170181274414

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042104721069336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042104721069336

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073623657226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073623657226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035786628723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073623657226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035786628723145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030422210693359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073623657226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035786628723145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030422210693359

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00082087516784668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073623657226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035786628723145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030422210693359

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00082087516784668

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060105323791504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073623657226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035786628723145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030422210693359

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00082087516784668

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060105323791504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040597915649414

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00046610832214355

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00046610832214355

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00033092498779297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034117698669434

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034117698669434

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031614303588867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015091896057129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015091896057129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015091896057129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015091896057129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015091896057129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00029397010803223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024728775024414

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00054597854614258

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00054597854614258

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003819465637207

select count(*) as cnt from patient_registration where  patient_registration_id= '1841' and  office_id= '1' 
 Execution Time:0.0004880428314209

select count(*) as cnt from patient_registration where  patient_registration_id= '1841' and  office_id= '1' 
 Execution Time:0.0004880428314209

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1841' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038511753082275

select count(*) as cnt from patient_registration where  patient_registration_id= '1841' and  office_id= '1' 
 Execution Time:0.0004880428314209

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1841' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038511753082275

select fname,lname,mrdno from patient_registration where  patient_registration_id='1841' and  office_id= '1' 
 Execution Time:0.0033619403839111

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00046992301940918

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00046992301940918

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003659725189209

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046491622924805

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046491622924805

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053691864013672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053691864013672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057816505432129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053691864013672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057816505432129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053691864013672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057816505432129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074982643127441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053691864013672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057816505432129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074982643127441

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042130947113037

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055599212646484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055599212646484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055599212646484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018351078033447

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055599212646484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018351078033447

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062298774719238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055599212646484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018351078033447

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062298774719238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004302978515625

select count(*) as cnt from patient_registration where  patient_registration_id= '1842' and  office_id= '1' 
 Execution Time:0.0004119873046875

select count(*) as cnt from patient_registration where  patient_registration_id= '1842' and  office_id= '1' 
 Execution Time:0.0004119873046875

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1842' and  doctors_registration.office_id= '1' 
 Execution Time:0.0018150806427002

select count(*) as cnt from patient_registration where  patient_registration_id= '1842' and  office_id= '1' 
 Execution Time:0.0004119873046875

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1842' and  doctors_registration.office_id= '1' 
 Execution Time:0.0018150806427002

select fname,lname,mrdno from patient_registration where  patient_registration_id='1842' and  office_id= '1' 
 Execution Time:0.00021505355834961

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00032711029052734

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00032711029052734

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00030708312988281

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00036406517028809

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00036406517028809

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00019216537475586

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003969669342041

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003969669342041

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013399124145508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013399124145508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013399124145508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013399124145508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00021815299987793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013399124145508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00021815299987793

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024101734161377

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00080394744873047

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00080394744873047

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037002563476562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042510032653809

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042510032653809

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043106079101562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043106079101562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043106079101562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043106079101562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046491622924805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043106079101562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046491622924805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036330223083496

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00028705596923828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027649402618408

select count(*) as cnt from patient_registration where  patient_registration_id= '1604' and  office_id= '1' 
 Execution Time:0.00038003921508789

select count(*) as cnt from patient_registration where  patient_registration_id= '1604' and  office_id= '1' 
 Execution Time:0.00038003921508789

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1604' and  doctors_registration.office_id= '1' 
 Execution Time:0.0032851696014404

select count(*) as cnt from patient_registration where  patient_registration_id= '1604' and  office_id= '1' 
 Execution Time:0.00038003921508789

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1604' and  doctors_registration.office_id= '1' 
 Execution Time:0.0032851696014404

select fname,lname,mrdno from patient_registration where  patient_registration_id='1604' and  office_id= '1' 
 Execution Time:0.00029301643371582

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00057601928710938

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00057601928710938

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00027608871459961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028538703918457

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028538703918457

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028538703918457

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028538703918457

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028538703918457

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027780532836914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027780532836914

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027780532836914

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027780532836914

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027780532836914

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select count(*) as cnt from patient_registration where  patient_registration_id= '2068' and  office_id= '1' 
 Execution Time:0.00031781196594238

select count(*) as cnt from patient_registration where  patient_registration_id= '2068' and  office_id= '1' 
 Execution Time:0.00031781196594238

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2068' and  doctors_registration.office_id= '1' 
 Execution Time:0.0019710063934326

select count(*) as cnt from patient_registration where  patient_registration_id= '2068' and  office_id= '1' 
 Execution Time:0.00031781196594238

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2068' and  doctors_registration.office_id= '1' 
 Execution Time:0.0019710063934326

select fname,lname,mrdno from patient_registration where  patient_registration_id='2068' and  office_id= '1' 
 Execution Time:0.00028896331787109

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013329982757568

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013329982757568

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061702728271484

select * from investigation where  investigation_id=22  and office_id= 1 and status=1 
 Execution Time:0.00063920021057129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043189525604248

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043189525604248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0041658878326416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043189525604248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0041658878326416

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0021910667419434

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043189525604248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0041658878326416

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0021910667419434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0009768009185791

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043189525604248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0041658878326416

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0021910667419434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0009768009185791

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0033779144287109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019097328186035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019097328186035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019097328186035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019097328186035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076603889465332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019097328186035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076603889465332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003878116607666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047612190246582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047612190246582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047612190246582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047612190246582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005340576171875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047612190246582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005340576171875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023849010467529

select count(*) as cnt from patient_registration where  patient_registration_id= '1755' and  office_id= '1' 
 Execution Time:0.00031113624572754

select count(*) as cnt from patient_registration where  patient_registration_id= '1755' and  office_id= '1' 
 Execution Time:0.00031113624572754

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1755' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021829605102539

select count(*) as cnt from patient_registration where  patient_registration_id= '1755' and  office_id= '1' 
 Execution Time:0.00031113624572754

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1755' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021829605102539

select fname,lname,mrdno from patient_registration where  patient_registration_id='1755' and  office_id= '1' 
 Execution Time:0.00022697448730469

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066399574279785

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066399574279785

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038504600524902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033109188079834

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033109188079834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033109188079834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022077560424805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033109188079834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022077560424805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00016379356384277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033109188079834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022077560424805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00016379356384277

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select count(*) as cnt from patient_registration where  patient_registration_id= '1842' and  office_id= '1' 
 Execution Time:0.0039758682250977

select count(*) as cnt from patient_registration where  patient_registration_id= '1842' and  office_id= '1' 
 Execution Time:0.0039758682250977

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1842' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038571357727051

select count(*) as cnt from patient_registration where  patient_registration_id= '1842' and  office_id= '1' 
 Execution Time:0.0039758682250977

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1842' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038571357727051

select fname,lname,mrdno from patient_registration where  patient_registration_id='1842' and  office_id= '1' 
 Execution Time:0.0037729740142822

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001147985458374

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001147985458374

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016899108886719

select * from investigation where  investigation_id=4  and office_id= 1 and status=1 
 Execution Time:0.0017309188842773

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048689842224121

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048689842224121

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048689842224121

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048689842224121

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048689842224121

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018091201782227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018091201782227

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0060839653015137

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018091201782227

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0060839653015137

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017478466033936

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018091201782227

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0060839653015137

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017478466033936

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023748874664307

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018091201782227

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0060839653015137

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017478466033936

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023748874664307

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001798152923584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018091201782227

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0060839653015137

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017478466033936

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023748874664307

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001798152923584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016980171203613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018091201782227

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0060839653015137

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017478466033936

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023748874664307

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001798152923584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016980171203613

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015840530395508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018091201782227

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0060839653015137

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017478466033936

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023748874664307

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001798152923584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016980171203613

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015840530395508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045351982116699

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.000701904296875

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.000701904296875

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00047206878662109

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0036449432373047

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0036449432373047

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038189888000488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047719478607178

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047719478607178

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002716064453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047719478607178

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002716064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034751892089844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047719478607178

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002716064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034751892089844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001802921295166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047719478607178

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002716064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034751892089844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001802921295166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033957958221436

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047719478607178

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002716064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034751892089844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001802921295166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033957958221436

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010340213775635

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047719478607178

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002716064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034751892089844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001802921295166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033957958221436

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010340213775635

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015099048614502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047719478607178

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002716064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034751892089844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001802921295166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033957958221436

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010340213775635

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015099048614502

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010415077209473

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.016544818878174

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.016544818878174

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0050971508026123

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.016544818878174

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0050971508026123

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.011127948760986

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.016544818878174

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0050971508026123

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.011127948760986

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0066871643066406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.016544818878174

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0050971508026123

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.011127948760986

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0066871643066406

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0011699199676514

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066184997558594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066184997558594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066184997558594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033481121063232

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066184997558594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033481121063232

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066184997558594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033481121063232

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066184997558594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033481121063232

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087308883666992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066184997558594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033481121063232

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087308883666992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043520927429199

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0015649795532227

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0015649795532227

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00040793418884277

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070500373840332

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070500373840332

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015799999237061

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015799999237061

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015799999237061

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040006637573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015799999237061

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040006637573242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015799999237061

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040006637573242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015799999237061

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040006637573242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083780288696289

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015799999237061

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040006637573242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083780288696289

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042591094970703

select count(*) as cnt from patient_registration where  patient_registration_id= '1406' and  office_id= '1' 
 Execution Time:0.00041294097900391

select count(*) as cnt from patient_registration where  patient_registration_id= '1406' and  office_id= '1' 
 Execution Time:0.00041294097900391

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1406' and  doctors_registration.office_id= '1' 
 Execution Time:0.0052070617675781

select count(*) as cnt from patient_registration where  patient_registration_id= '1406' and  office_id= '1' 
 Execution Time:0.00041294097900391

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1406' and  doctors_registration.office_id= '1' 
 Execution Time:0.0052070617675781

select fname,lname,mrdno from patient_registration where  patient_registration_id='1406' and  office_id= '1' 
 Execution Time:0.0017938613891602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004889965057373

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004889965057373

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028800964355469

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003659725189209

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003659725189209

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00028896331787109

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039291381835938

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039291381835938

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025010108947754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037693977355957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003788948059082

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026419162750244

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026419162750244

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026419162750244

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026419162750244

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026419162750244

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select count(*) as cnt from patient_registration where  patient_registration_id= '243' and  office_id= '1' 
 Execution Time:0.00052404403686523

select count(*) as cnt from patient_registration where  patient_registration_id= '243' and  office_id= '1' 
 Execution Time:0.00052404403686523

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='243' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021069049835205

select count(*) as cnt from patient_registration where  patient_registration_id= '243' and  office_id= '1' 
 Execution Time:0.00052404403686523

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='243' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021069049835205

select fname,lname,mrdno from patient_registration where  patient_registration_id='243' and  office_id= '1' 
 Execution Time:0.00025296211242676

select count(*) as cnt from patient_registration where  patient_registration_id= '2073' and  office_id= '1' 
 Execution Time:0.00044798851013184

select count(*) as cnt from patient_registration where  patient_registration_id= '2073' and  office_id= '1' 
 Execution Time:0.00044798851013184

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2073' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021240711212158

select count(*) as cnt from patient_registration where  patient_registration_id= '2073' and  office_id= '1' 
 Execution Time:0.00044798851013184

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2073' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021240711212158

select fname,lname,mrdno from patient_registration where  patient_registration_id='2073' and  office_id= '1' 
 Execution Time:0.00027298927307129

select count(*) as cnt from patient_registration where  patient_registration_id= '2067' and  office_id= '1' 
 Execution Time:0.00041508674621582

select count(*) as cnt from patient_registration where  patient_registration_id= '2067' and  office_id= '1' 
 Execution Time:0.00041508674621582

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2067' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031919479370117

select count(*) as cnt from patient_registration where  patient_registration_id= '2067' and  office_id= '1' 
 Execution Time:0.00041508674621582

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2067' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031919479370117

select fname,lname,mrdno from patient_registration where  patient_registration_id='2067' and  office_id= '1' 
 Execution Time:0.00034093856811523

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054502487182617

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054502487182617

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00089502334594727

select * from investigation where  investigation_id=19  and office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003018856048584

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003018856048584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003018856048584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003018856048584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003018856048584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010349750518799

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010349750518799

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071191787719727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010349750518799

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071191787719727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002946138381958

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005338191986084

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005338191986084

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029802322387695

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015919208526611

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015919208526611

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064206123352051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027189254760742

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027189254760742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027189254760742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027189254760742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065493583679199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027189254760742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065493583679199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027189254760742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065493583679199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027189254760742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065493583679199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010519027709961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027189254760742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065493583679199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010519027709961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042450428009033

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0008089542388916

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0008089542388916

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00038385391235352

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0052080154418945

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0052080154418945

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0021390914916992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033712387084961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033712387084961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033712387084961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060009956359863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033712387084961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060009956359863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046429634094238

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0022361278533936

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0022361278533936

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0033111572265625

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042080879211426

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042080879211426

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055313110351562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055313110351562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055313110351562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055313110351562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071811676025391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055313110351562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071811676025391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036780834197998

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038909912109375

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038909912109375

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00018882751464844

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00034904479980469

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00034904479980469

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00029087066650391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026679039001465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026679039001465

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026679039001465

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033903121948242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039241313934326

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034608840942383

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034608840942383

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034608840942383

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034608840942383

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034608840942383

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055694580078125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055694580078125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004101037979126

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002138614654541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002138614654541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002138614654541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002138614654541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043821334838867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002138614654541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043821334838867

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033838748931885

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069210529327393

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069210529327393

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069210529327393

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069210529327393

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069210529327393

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040099620819092

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040099620819092

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040099620819092

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040099620819092

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040099620819092

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select count(*) as cnt from patient_registration where  patient_registration_id= '2079' and  office_id= '1' 
 Execution Time:0.0003509521484375

select count(*) as cnt from patient_registration where  patient_registration_id= '2079' and  office_id= '1' 
 Execution Time:0.0003509521484375

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2079' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038409233093262

select count(*) as cnt from patient_registration where  patient_registration_id= '2079' and  office_id= '1' 
 Execution Time:0.0003509521484375

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2079' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038409233093262

select fname,lname,mrdno from patient_registration where  patient_registration_id='2079' and  office_id= '1' 
 Execution Time:0.00048303604125977

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013959407806396

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013959407806396

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004580020904541

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00067806243896484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048580169677734

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048580169677734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048580169677734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048580169677734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048580169677734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00098299980163574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00098299980163574

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043859481811523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047860145568848

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047860145568848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047860145568848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047860145568848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047860145568848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select count(*) as cnt from patient_registration where  patient_registration_id= '2076' and  office_id= '1' 
 Execution Time:0.00078916549682617

select count(*) as cnt from patient_registration where  patient_registration_id= '2076' and  office_id= '1' 
 Execution Time:0.00078916549682617

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2076' and  doctors_registration.office_id= '1' 
 Execution Time:0.0023350715637207

select count(*) as cnt from patient_registration where  patient_registration_id= '2076' and  office_id= '1' 
 Execution Time:0.00078916549682617

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2076' and  doctors_registration.office_id= '1' 
 Execution Time:0.0023350715637207

select fname,lname,mrdno from patient_registration where  patient_registration_id='2076' and  office_id= '1' 
 Execution Time:0.00024294853210449

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0009160041809082

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0009160041809082

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040888786315918

select * from investigation where  investigation_id=22  and office_id= 1 and status=1 
 Execution Time:0.0033719539642334

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049171447753906

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049171447753906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016140937805176

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049171447753906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016140937805176

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00154709815979

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049171447753906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016140937805176

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00154709815979

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049171447753906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016140937805176

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00154709815979

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011258125305176

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011258125305176

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011258125305176

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011258125305176

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037384033203125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011258125305176

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037384033203125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011258125305176

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037384033203125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011258125305176

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037384033203125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071406364440918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011258125305176

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037384033203125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071406364440918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042750835418701

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00093984603881836

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00093984603881836

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0002751350402832

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00045394897460938

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00045394897460938

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00033783912658691

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042390823364258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042390823364258

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023317337036133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010380744934082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010380744934082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010380744934082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010380744934082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002288818359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010380744934082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002288818359375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010380744934082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002288818359375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010380744934082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002288818359375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064802169799805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010380744934082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002288818359375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064802169799805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034120082855225

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00054597854614258

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00054597854614258

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003509521484375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.004065990447998

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.004065990447998

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0078091621398926

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011110305786133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011110305786133

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082015991210938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011110305786133

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082015991210938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011110305786133

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082015991210938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011110305786133

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082015991210938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035405158996582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011110305786133

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082015991210938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035405158996582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011110305786133

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082015991210938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035405158996582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011110305786133

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082015991210938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035405158996582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033402442932129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027310848236084

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029182434082031

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029182434082031

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00022196769714355

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003199577331543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003199577331543

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048184394836426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048184394836426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048184394836426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048184394836426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055098533630371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048184394836426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055098533630371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042099952697754

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029802322387695

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029802322387695

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029301643371582

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004429817199707

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004429817199707

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046515464782715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046515464782715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040509700775146

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041604042053223

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041604042053223

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026798248291016

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055313110351562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055313110351562

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020885467529297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020885467529297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028138160705566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020885467529297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028138160705566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001223087310791

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020885467529297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028138160705566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001223087310791

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036191940307617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020885467529297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028138160705566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001223087310791

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036191940307617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049748420715332

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0038411617279053

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0038411617279053

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0019969940185547

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00062417984008789

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00062417984008789

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052380561828613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052380561828613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052380561828613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052380561828613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031018257141113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052380561828613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031018257141113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052380561828613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031018257141113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052380561828613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031018257141113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006568431854248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052380561828613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031018257141113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006568431854248

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041921138763428

select count(*) as cnt from patient_registration where  patient_registration_id= '1887' and  office_id= '1' 
 Execution Time:0.0029971599578857

select count(*) as cnt from patient_registration where  patient_registration_id= '1887' and  office_id= '1' 
 Execution Time:0.0029971599578857

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1887' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038578510284424

select count(*) as cnt from patient_registration where  patient_registration_id= '1887' and  office_id= '1' 
 Execution Time:0.0029971599578857

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1887' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038578510284424

select fname,lname,mrdno from patient_registration where  patient_registration_id='1887' and  office_id= '1' 
 Execution Time:0.0038299560546875

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0043690204620361

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0043690204620361

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0078549385070801

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00060606002807617

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00060606002807617

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032496452331543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061297416687012

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061297416687012

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029110908508301

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00058698654174805

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00058698654174805

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011789798736572

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011789798736572

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0074319839477539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011789798736572

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0074319839477539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037219524383545

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011789798736572

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0074319839477539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037219524383545

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037569999694824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011789798736572

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0074319839477539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037219524383545

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037569999694824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037989616394043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011789798736572

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0074319839477539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037219524383545

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037569999694824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037989616394043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035440921783447

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011789798736572

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0074319839477539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037219524383545

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037569999694824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037989616394043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035440921783447

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0050191879272461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011789798736572

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0074319839477539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037219524383545

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037569999694824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037989616394043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035440921783447

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0050191879272461

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045139789581299

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00046086311340332

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00046086311340332

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041699409484863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005190372467041

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005190372467041

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039887428283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037789344787598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037789344787598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037789344787598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053501129150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037789344787598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053501129150391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054850578308105

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052714347839355

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052714347839355

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036001205444336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037479400634766

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037479400634766

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033712387084961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033712387084961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033712387084961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033712387084961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040698051452637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033140182495117

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038678646087646

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038678646087646

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038678646087646

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016169548034668

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038678646087646

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016169548034668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038678646087646

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016169548034668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0010371208190918

select count(*) as cnt from patient_registration where  patient_registration_id= '2085' and  office_id= '1' 
 Execution Time:0.0012538433074951

select count(*) as cnt from patient_registration where  patient_registration_id= '2085' and  office_id= '1' 
 Execution Time:0.0012538433074951

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2085' and  doctors_registration.office_id= '1' 
 Execution Time:0.0035779476165771

select count(*) as cnt from patient_registration where  patient_registration_id= '2085' and  office_id= '1' 
 Execution Time:0.0012538433074951

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2085' and  doctors_registration.office_id= '1' 
 Execution Time:0.0035779476165771

select fname,lname,mrdno from patient_registration where  patient_registration_id='2085' and  office_id= '1' 
 Execution Time:0.003741979598999

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0044119358062744

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0044119358062744

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.000823974609375

select * from investigation where  investigation_id=9  and office_id= 1 and status=1 
 Execution Time:0.00069594383239746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073270797729492

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073270797729492

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012428760528564

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073270797729492

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012428760528564

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0037078857421875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073270797729492

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012428760528564

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0037078857421875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0041258335113525

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073270797729492

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012428760528564

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0037078857421875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0041258335113525

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0010871887207031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005836009979248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005836009979248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022740364074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005836009979248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022740364074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010340213775635

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005836009979248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022740364074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010340213775635

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023548603057861

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005836009979248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022740364074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010340213775635

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023548603057861

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033738613128662

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005836009979248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022740364074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010340213775635

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023548603057861

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033738613128662

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012259483337402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005836009979248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022740364074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010340213775635

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023548603057861

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033738613128662

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012259483337402

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0033330917358398

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005836009979248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022740364074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010340213775635

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023548603057861

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033738613128662

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012259483337402

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0033330917358398

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049481391906738

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067710876464844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067710876464844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025701522827148

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053310394287109

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053310394287109

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031590461730957

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031590461730957

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031590461730957

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011730194091797

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00130295753479

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00130295753479

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00130295753479

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00130295753479

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004730224609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00130295753479

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004730224609375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040268898010254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049996376037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049996376037598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049996376037598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049996376037598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007929801940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049996376037598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007929801940918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003896951675415

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038909912109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038909912109375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026619434356689

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0005180835723877

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0005180835723877

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00026488304138184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039196014404297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039196014404297

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031781196594238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025510787963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025510787963867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025510787963867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025510787963867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004880428314209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025510787963867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004880428314209

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026638507843018

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046939849853516

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046939849853516

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034730434417725

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046939849853516

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034730434417725

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0025608539581299

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046939849853516

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034730434417725

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0025608539581299

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0010061264038086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046939849853516

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034730434417725

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0025608539581299

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0010061264038086

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0041370391845703

select count(*) as cnt from patient_registration where  patient_registration_id= '2086' and  office_id= '1' 
 Execution Time:0.00027203559875488

select count(*) as cnt from patient_registration where  patient_registration_id= '2086' and  office_id= '1' 
 Execution Time:0.00027203559875488

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2086' and  doctors_registration.office_id= '1' 
 Execution Time:0.0018160343170166

select count(*) as cnt from patient_registration where  patient_registration_id= '2086' and  office_id= '1' 
 Execution Time:0.00027203559875488

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2086' and  doctors_registration.office_id= '1' 
 Execution Time:0.0018160343170166

select fname,lname,mrdno from patient_registration where  patient_registration_id='2086' and  office_id= '1' 
 Execution Time:0.00018882751464844

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0008690357208252

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0008690357208252

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037813186645508

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.0004880428314209

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0038158893585205

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040740966796875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040740966796875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040740966796875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040740966796875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040740966796875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042200088500977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042200088500977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042200088500977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080108642578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042200088500977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080108642578125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041289329528809

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.010332822799683

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.010332822799683

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00039911270141602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.010726928710938

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.010726928710938

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016379356384277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093984603881836

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093984603881836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022709369659424

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093984603881836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022709369659424

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001129150390625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093984603881836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022709369659424

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001129150390625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093984603881836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022709369659424

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001129150390625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093984603881836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022709369659424

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001129150390625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043606758117676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093984603881836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022709369659424

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001129150390625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043606758117676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040750503540039

select count(*) as cnt from patient_registration where  patient_registration_id= '1760' and  office_id= '1' 
 Execution Time:0.000701904296875

select count(*) as cnt from patient_registration where  patient_registration_id= '1760' and  office_id= '1' 
 Execution Time:0.000701904296875

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1760' and  doctors_registration.office_id= '1' 
 Execution Time:0.0034949779510498

select count(*) as cnt from patient_registration where  patient_registration_id= '1760' and  office_id= '1' 
 Execution Time:0.000701904296875

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1760' and  doctors_registration.office_id= '1' 
 Execution Time:0.0034949779510498

select fname,lname,mrdno from patient_registration where  patient_registration_id='1760' and  office_id= '1' 
 Execution Time:0.00027799606323242

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00060582160949707

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00060582160949707

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00021600723266602

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.001162052154541

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.001162052154541

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026202201843262

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00067806243896484

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00067806243896484

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022220611572266

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071811676025391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071811676025391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071811676025391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071811676025391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052404403686523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071811676025391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052404403686523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071811676025391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052404403686523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068402290344238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071811676025391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052404403686523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068402290344238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042998790740967

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00092911720275879

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00092911720275879

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030803680419922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0009000301361084

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0009000301361084

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042510032653809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042510032653809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042510032653809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042510032653809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006110668182373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042510032653809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006110668182373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047848224639893

select count(*) as cnt from patient_registration where  patient_registration_id= '1711' and  office_id= '1' 
 Execution Time:0.00063085556030273

select count(*) as cnt from patient_registration where  patient_registration_id= '1711' and  office_id= '1' 
 Execution Time:0.00063085556030273

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1711' and  doctors_registration.office_id= '1' 
 Execution Time:0.004349946975708

select count(*) as cnt from patient_registration where  patient_registration_id= '1711' and  office_id= '1' 
 Execution Time:0.00063085556030273

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1711' and  doctors_registration.office_id= '1' 
 Execution Time:0.004349946975708

select fname,lname,mrdno from patient_registration where  patient_registration_id='1711' and  office_id= '1' 
 Execution Time:0.00036191940307617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012691020965576

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012691020965576

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026106834411621

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00046706199645996

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00046706199645996

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00029802322387695

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010828971862793

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010828971862793

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029516220092773

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044894218444824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044894218444824

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002129077911377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046300888061523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046300888061523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046300888061523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049304962158203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046300888061523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049304962158203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024778842926025

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037503242492676

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037503242492676

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00025391578674316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070405006408691

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070405006408691

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053620338439941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053620338439941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053620338439941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053620338439941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068306922912598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053620338439941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068306922912598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042870044708252

select count(*) as cnt from patient_registration where  patient_registration_id= '1634' and  office_id= '1' 
 Execution Time:0.00072598457336426

select count(*) as cnt from patient_registration where  patient_registration_id= '1634' and  office_id= '1' 
 Execution Time:0.00072598457336426

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1634' and  doctors_registration.office_id= '1' 
 Execution Time:0.004162073135376

select count(*) as cnt from patient_registration where  patient_registration_id= '1634' and  office_id= '1' 
 Execution Time:0.00072598457336426

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1634' and  doctors_registration.office_id= '1' 
 Execution Time:0.004162073135376

select fname,lname,mrdno from patient_registration where  patient_registration_id='1634' and  office_id= '1' 
 Execution Time:0.00042486190795898

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00078201293945312

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00078201293945312

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051403045654297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051403045654297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005108118057251

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034189224243164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034189224243164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034189224243164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034189224243164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061988830566406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034189224243164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061988830566406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036470890045166

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055599212646484

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055599212646484

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00019502639770508

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006861686706543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006861686706543

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097489356994629

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097489356994629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097489356994629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097489356994629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097489356994629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097489356994629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097489356994629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006411075592041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097489356994629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006411075592041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003000020980835

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063800811767578

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063800811767578

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00032591819763184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050187110900879

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050187110900879

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00021195411682129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017213821411133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017213821411133

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015521049499512

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017213821411133

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015521049499512

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017213821411133

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015521049499512

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017213821411133

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015521049499512

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046992301940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017213821411133

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015521049499512

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046992301940918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031590461730957

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010440349578857

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010440349578857

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005030632019043

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040793418884277

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040793418884277

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015139579772949

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015139579772949

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015139579772949

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015139579772949

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015139579772949

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015139579772949

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015139579772949

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015139579772949

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004270076751709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002525806427002

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034689903259277

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034689903259277

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00027680397033691

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042891502380371

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042891502380371

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001039981842041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001039981842041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021770000457764

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001039981842041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021770000457764

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098085403442383

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001039981842041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021770000457764

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098085403442383

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001039981842041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021770000457764

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098085403442383

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066304206848145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001039981842041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021770000457764

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098085403442383

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066304206848145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038020610809326

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00033307075500488

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00033307075500488

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00027108192443848

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048303604125977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048303604125977

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012588500976562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012588500976562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00011920928955078

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012588500976562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00011920928955078

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013208389282227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012588500976562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00011920928955078

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013208389282227

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012588500976562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00011920928955078

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013208389282227

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012588500976562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00011920928955078

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013208389282227

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00024795532226562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039041042327881

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00069189071655273

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00069189071655273

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00022196769714355

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00073599815368652

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00073599815368652

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054001808166504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054001808166504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054001808166504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006711483001709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054001808166504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006711483001709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002885103225708

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048840045928955

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048840045928955

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001054048538208

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048840045928955

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001054048538208

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0043039321899414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048840045928955

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001054048538208

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0043039321899414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048840045928955

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001054048538208

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0043039321899414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053596496582031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048840045928955

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001054048538208

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0043039321899414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053596496582031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051398277282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046992301940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046992301940918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046992301940918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00094103813171387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046992301940918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00094103813171387

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082206726074219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046992301940918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00094103813171387

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082206726074219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032539367675781

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00069808959960938

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00069808959960938

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00028800964355469

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043106079101562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043106079101562

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023984909057617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017251968383789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017251968383789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017251968383789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025081634521484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017251968383789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025081634521484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017251968383789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025081634521484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00035715103149414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017251968383789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025081634521484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00035715103149414

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024278163909912


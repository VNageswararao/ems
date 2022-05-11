select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023770332336426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023770332336426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019009113311768

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023770332336426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019009113311768

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020709037780762

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023770332336426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019009113311768

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020709037780762

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018458366394043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023770332336426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019009113311768

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020709037780762

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018458366394043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018758773803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023770332336426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019009113311768

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020709037780762

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018458366394043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018758773803711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023770332336426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019009113311768

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020709037780762

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018458366394043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018758773803711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028750896453857

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023770332336426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019009113311768

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020709037780762

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018458366394043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018758773803711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028750896453857

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045530796051025

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087039470672607

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087039470672607

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0030200481414795

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087039470672607

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0030200481414795

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.016174793243408

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087039470672607

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0030200481414795

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.016174793243408

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.062711954116821

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065319538116455

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065319538116455

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001708984375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065319538116455

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001708984375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0030560493469238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065319538116455

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001708984375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0030560493469238

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0036098957061768

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-07' and  '2021-12-07' and  billing_master.office_id= 1        
 Execution Time:0.0018539428710938

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-07' and  '2021-12-07' and  billing_master.office_id= 1        
 Execution Time:0.0018539428710938

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-07' and '2021-12-07' and  patient_registration.office_id= 1      
 Execution Time:0.0037059783935547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006248950958252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006248950958252

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004180908203125

select count(*) as cnt from patient_registration where  patient_registration_id= '3039' and  office_id= '1' 
 Execution Time:0.00096011161804199

select count(*) as cnt from patient_registration where  patient_registration_id= '3039' and  office_id= '1' 
 Execution Time:0.00096011161804199

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3039' and  doctors_registration.office_id= '1' 
 Execution Time:0.0058579444885254

select count(*) as cnt from patient_registration where  patient_registration_id= '3039' and  office_id= '1' 
 Execution Time:0.00096011161804199

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3039' and  doctors_registration.office_id= '1' 
 Execution Time:0.0058579444885254

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3039' and  office_id= '1' 
 Execution Time:0.00040388107299805

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00091719627380371

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00091719627380371

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00043702125549316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061099529266357

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061099529266357

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061099529266357

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061099529266357

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061099529266357

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051116943359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051116943359375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051116943359375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051116943359375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071811676025391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051116943359375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071811676025391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064489841461182

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0054881572723389

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0054881572723389

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064897537231445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0054881572723389

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064897537231445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0093650817871094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0054881572723389

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064897537231445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0093650817871094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0048720836639404

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0054881572723389

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064897537231445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0093650817871094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0048720836639404

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069308280944824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0054881572723389

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064897537231445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0093650817871094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0048720836639404

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069308280944824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068058967590332

select count(*) as cnt from patient_registration where  patient_registration_id= '3168' and  office_id= '1' 
 Execution Time:0.00054287910461426

select count(*) as cnt from patient_registration where  patient_registration_id= '3168' and  office_id= '1' 
 Execution Time:0.00054287910461426

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3168' and  doctors_registration.office_id= '1' 
 Execution Time:0.0050458908081055

select count(*) as cnt from patient_registration where  patient_registration_id= '3168' and  office_id= '1' 
 Execution Time:0.00054287910461426

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3168' and  doctors_registration.office_id= '1' 
 Execution Time:0.0050458908081055

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3168' and  office_id= '1' 
 Execution Time:0.00048398971557617

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00098609924316406

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00098609924316406

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00034308433532715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004127025604248

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004127025604248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004127025604248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004127025604248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004127025604248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select count(*) as cnt from patient_registration where  patient_registration_id= '3168' and  office_id= '1' 
 Execution Time:0.00035905838012695

select count(*) as cnt from patient_registration where  patient_registration_id= '3168' and  office_id= '1' 
 Execution Time:0.00035905838012695

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3168' and  doctors_registration.office_id= '1' 
 Execution Time:0.0053658485412598

select count(*) as cnt from patient_registration where  patient_registration_id= '3168' and  office_id= '1' 
 Execution Time:0.00035905838012695

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3168' and  doctors_registration.office_id= '1' 
 Execution Time:0.0053658485412598

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3168' and  office_id= '1' 
 Execution Time:0.00041508674621582

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0028140544891357

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0028140544891357

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041294097900391

select * from investigation where  investigation_id=11  and office_id= 1 and status=1 
 Execution Time:0.00037097930908203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080721378326416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080721378326416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080721378326416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080721378326416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080721378326416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select count(*) as cnt from patient_registration where  patient_registration_id= '3218' and  office_id= '1' 
 Execution Time:0.00045394897460938

select count(*) as cnt from patient_registration where  patient_registration_id= '3218' and  office_id= '1' 
 Execution Time:0.00045394897460938

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3218' and  doctors_registration.office_id= '1' 
 Execution Time:0.0040440559387207

select count(*) as cnt from patient_registration where  patient_registration_id= '3218' and  office_id= '1' 
 Execution Time:0.00045394897460938

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3218' and  doctors_registration.office_id= '1' 
 Execution Time:0.0040440559387207

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3218' and  office_id= '1' 
 Execution Time:0.00028681755065918

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00056815147399902

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00056815147399902

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00028800964355469

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00054216384887695

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00051498413085938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038988590240479

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038988590240479

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035519599914551

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038988590240479

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035519599914551

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0014641284942627

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038988590240479

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035519599914551

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0014641284942627

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0020179748535156

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038988590240479

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035519599914551

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0014641284942627

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0020179748535156

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036699771881104

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036699771881104

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036699771881104

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028820037841797

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036699771881104

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028820037841797

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036699771881104

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028820037841797

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036699771881104

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028820037841797

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003770112991333

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036699771881104

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028820037841797

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003770112991333

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034470558166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036699771881104

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028820037841797

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083804130554199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003770112991333

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034470558166504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081319808959961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067951679229736

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067951679229736

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083279609680176

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067951679229736

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083279609680176

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067951679229736

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083279609680176

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00057816505432129

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-01' and  '2021-12-01' and  billing_master.office_id= 1        
 Execution Time:0.0016770362854004

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-01' and  '2021-12-01' and  billing_master.office_id= 1        
 Execution Time:0.0016770362854004

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-01' and '2021-12-01' and  patient_registration.office_id= 1      
 Execution Time:0.0052399635314941

select count(*) as cnt from patient_registration where  patient_registration_id= '3218' and  office_id= '1' 
 Execution Time:0.00028514862060547

select count(*) as cnt from patient_registration where  patient_registration_id= '3218' and  office_id= '1' 
 Execution Time:0.00028514862060547

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3218' and  doctors_registration.office_id= '1' 
 Execution Time:0.0046811103820801

select count(*) as cnt from patient_registration where  patient_registration_id= '3218' and  office_id= '1' 
 Execution Time:0.00028514862060547

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3218' and  doctors_registration.office_id= '1' 
 Execution Time:0.0046811103820801

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3218' and  office_id= '1' 
 Execution Time:0.00044107437133789

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0005190372467041

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0005190372467041

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0012152194976807

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041801929473877

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041801929473877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041801929473877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041801929473877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029921531677246

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041801929473877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029921531677246

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046370029449463

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046370029449463

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046370029449463

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046370029449463

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00014615058898926

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-01' and  '2021-12-01' and  billing_master.office_id= 1      and billing_master.doctor_id=3   
 Execution Time:0.0057182312011719

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-01' and  '2021-12-01' and  billing_master.office_id= 1      and billing_master.doctor_id=3   
 Execution Time:0.0057182312011719

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-01' and '2021-12-01' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=3 
 Execution Time:0.0049729347229004

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-02' and  '2021-12-02' and  billing_master.office_id= 1      and billing_master.doctor_id=3   
 Execution Time:0.0012898445129395

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-02' and  '2021-12-02' and  billing_master.office_id= 1      and billing_master.doctor_id=3   
 Execution Time:0.0012898445129395

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-02' and '2021-12-02' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=3 
 Execution Time:0.0048131942749023

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.000640869140625

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.000640869140625

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010612010955811

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047492980957031

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047492980957031

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043106079101562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019216537475586

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019216537475586

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019216537475586

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019216537475586

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036907196044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019216537475586

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036907196044922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040900707244873

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-12-02' and '2021-12-02' and  billing_master.office_id= 1      and billing_master.doctor_id=3    
 Execution Time:0.0039770603179932

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-12-02' and '2021-12-02' and  billing_master.office_id= 1      and billing_master.doctor_id=3    
 Execution Time:0.0039770603179932

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-02' and '2021-12-02' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=3 
 Execution Time:0.005418062210083

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-12-02' and '2021-12-02' and  billing_master.office_id= 1      and billing_master.doctor_id=3    
 Execution Time:0.0039770603179932

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-02' and '2021-12-02' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=3 
 Execution Time:0.005418062210083

select * from investigation where  investigation_id=17  and office_id= 1 and status=1 
 Execution Time:0.00056815147399902

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-12-02' and '2021-12-02' and  billing_master.office_id= 1      and billing_master.doctor_id=3    
 Execution Time:0.0039770603179932

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-02' and '2021-12-02' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=3 
 Execution Time:0.005418062210083

select * from investigation where  investigation_id=17  and office_id= 1 and status=1 
 Execution Time:0.00056815147399902

select * from investigation where  investigation_id=16  and office_id= 1 and status=1 
 Execution Time:0.0002751350402832

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-12-02' and '2021-12-02' and  billing_master.office_id= 1      and billing_master.doctor_id=3    
 Execution Time:0.0039770603179932

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-02' and '2021-12-02' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=3 
 Execution Time:0.005418062210083

select * from investigation where  investigation_id=17  and office_id= 1 and status=1 
 Execution Time:0.00056815147399902

select * from investigation where  investigation_id=16  and office_id= 1 and status=1 
 Execution Time:0.0002751350402832

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00030612945556641

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-12-02' and '2021-12-02' and  billing_master.office_id= 1      and billing_master.doctor_id=3    
 Execution Time:0.0039770603179932

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-02' and '2021-12-02' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=3 
 Execution Time:0.005418062210083

select * from investigation where  investigation_id=17  and office_id= 1 and status=1 
 Execution Time:0.00056815147399902

select * from investigation where  investigation_id=16  and office_id= 1 and status=1 
 Execution Time:0.0002751350402832

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00030612945556641

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00025296211242676

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-12-02' and '2021-12-02' and  billing_master.office_id= 1      and billing_master.doctor_id=3    
 Execution Time:0.0039770603179932

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-02' and '2021-12-02' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=3 
 Execution Time:0.005418062210083

select * from investigation where  investigation_id=17  and office_id= 1 and status=1 
 Execution Time:0.00056815147399902

select * from investigation where  investigation_id=16  and office_id= 1 and status=1 
 Execution Time:0.0002751350402832

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00030612945556641

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00025296211242676

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00026917457580566

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-12-02' and '2021-12-02' and  billing_master.office_id= 1      and billing_master.doctor_id=3    
 Execution Time:0.0039770603179932

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-02' and '2021-12-02' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=3 
 Execution Time:0.005418062210083

select * from investigation where  investigation_id=17  and office_id= 1 and status=1 
 Execution Time:0.00056815147399902

select * from investigation where  investigation_id=16  and office_id= 1 and status=1 
 Execution Time:0.0002751350402832

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00030612945556641

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00025296211242676

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00026917457580566

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00027608871459961

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-12-02' and '2021-12-02' and  billing_master.office_id= 1      and billing_master.doctor_id=3    
 Execution Time:0.0039770603179932

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-02' and '2021-12-02' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=3 
 Execution Time:0.005418062210083

select * from investigation where  investigation_id=17  and office_id= 1 and status=1 
 Execution Time:0.00056815147399902

select * from investigation where  investigation_id=16  and office_id= 1 and status=1 
 Execution Time:0.0002751350402832

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00030612945556641

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00025296211242676

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00026917457580566

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00027608871459961

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00019598007202148

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-12-02' and '2021-12-02' and  billing_master.office_id= 1      and billing_master.doctor_id=3    
 Execution Time:0.0039770603179932

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-02' and '2021-12-02' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=3 
 Execution Time:0.005418062210083

select * from investigation where  investigation_id=17  and office_id= 1 and status=1 
 Execution Time:0.00056815147399902

select * from investigation where  investigation_id=16  and office_id= 1 and status=1 
 Execution Time:0.0002751350402832

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00030612945556641

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00025296211242676

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00026917457580566

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00027608871459961

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00019598007202148

select * from ipdcharge where  ipdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.0032808780670166

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-12-02' and '2021-12-02' and  billing_master.office_id= 1      and billing_master.doctor_id=3    
 Execution Time:0.0039770603179932

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-02' and '2021-12-02' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=3 
 Execution Time:0.005418062210083

select * from investigation where  investigation_id=17  and office_id= 1 and status=1 
 Execution Time:0.00056815147399902

select * from investigation where  investigation_id=16  and office_id= 1 and status=1 
 Execution Time:0.0002751350402832

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00030612945556641

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00025296211242676

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00026917457580566

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00027608871459961

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00019598007202148

select * from ipdcharge where  ipdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.0032808780670166

select * from ipdcharge where  ipdcharge_id=2  and office_id= 1 and status=1 
 Execution Time:0.00032401084899902

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-12-02' and '2021-12-02' and  billing_master.office_id= 1      and billing_master.doctor_id=3    
 Execution Time:0.0039770603179932

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-02' and '2021-12-02' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=3 
 Execution Time:0.005418062210083

select * from investigation where  investigation_id=17  and office_id= 1 and status=1 
 Execution Time:0.00056815147399902

select * from investigation where  investigation_id=16  and office_id= 1 and status=1 
 Execution Time:0.0002751350402832

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00030612945556641

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00025296211242676

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00026917457580566

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00027608871459961

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00019598007202148

select * from ipdcharge where  ipdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.0032808780670166

select * from ipdcharge where  ipdcharge_id=2  and office_id= 1 and status=1 
 Execution Time:0.00032401084899902

select * from injection where  injection_id=1  and office_id= 1 and status=1 
 Execution Time:0.002025842666626

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-12-02' and '2021-12-02' and  billing_master.office_id= 1      and billing_master.doctor_id=7    
 Execution Time:0.0011110305786133

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-12-02' and '2021-12-02' and  billing_master.office_id= 1      and billing_master.doctor_id=7    
 Execution Time:0.0011110305786133

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-02' and '2021-12-02' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=7 
 Execution Time:0.0021002292633057

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-12-03' and '2021-12-03' and  billing_master.office_id= 1      and billing_master.doctor_id=3    
 Execution Time:0.0030250549316406

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-12-03' and '2021-12-03' and  billing_master.office_id= 1      and billing_master.doctor_id=3    
 Execution Time:0.0030250549316406

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-03' and '2021-12-03' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=3 
 Execution Time:0.0038049221038818

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-12-03' and '2021-12-03' and  billing_master.office_id= 1      and billing_master.doctor_id=3    
 Execution Time:0.0024161338806152

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-12-03' and '2021-12-03' and  billing_master.office_id= 1      and billing_master.doctor_id=3    
 Execution Time:0.0024161338806152

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-03' and '2021-12-03' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=3 
 Execution Time:0.0042071342468262

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-12-04' and '2021-12-04' and  billing_master.office_id= 1      and billing_master.doctor_id=3    
 Execution Time:0.0028190612792969

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-12-04' and '2021-12-04' and  billing_master.office_id= 1      and billing_master.doctor_id=3    
 Execution Time:0.0028190612792969

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-04' and '2021-12-04' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=3 
 Execution Time:0.0029318332672119

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-12-04' and '2021-12-04' and  billing_master.office_id= 1      and billing_master.doctor_id=3    
 Execution Time:0.0028190612792969

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-04' and '2021-12-04' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=3 
 Execution Time:0.0029318332672119

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00052094459533691

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-12-04' and '2021-12-04' and  billing_master.office_id= 1      and billing_master.doctor_id=3    
 Execution Time:0.0028190612792969

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-04' and '2021-12-04' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=3 
 Execution Time:0.0029318332672119

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00052094459533691

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00025510787963867

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-12-04' and '2021-12-04' and  billing_master.office_id= 1      and billing_master.doctor_id=3    
 Execution Time:0.0028190612792969

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-04' and '2021-12-04' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=3 
 Execution Time:0.0029318332672119

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00052094459533691

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00025510787963867

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.0002751350402832

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-12-05' and '2021-12-05' and  billing_master.office_id= 1      and billing_master.doctor_id=3    
 Execution Time:0.0012290477752686

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-12-05' and '2021-12-05' and  billing_master.office_id= 1      and billing_master.doctor_id=3    
 Execution Time:0.0012290477752686

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-05' and '2021-12-05' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=3 
 Execution Time:0.0033209323883057

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-12-05' and '2021-12-05' and  billing_master.office_id= 1      and billing_master.doctor_id=7    
 Execution Time:0.015285968780518

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-12-05' and '2021-12-05' and  billing_master.office_id= 1      and billing_master.doctor_id=7    
 Execution Time:0.015285968780518

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-05' and '2021-12-05' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=7 
 Execution Time:0.0033419132232666

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-12-04' and '2021-12-04' and  billing_master.office_id= 1      and billing_master.doctor_id=7    
 Execution Time:0.0010848045349121

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-12-04' and '2021-12-04' and  billing_master.office_id= 1      and billing_master.doctor_id=7    
 Execution Time:0.0010848045349121

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-04' and '2021-12-04' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=7 
 Execution Time:0.0021979808807373

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-12-06' and '2021-12-06' and  billing_master.office_id= 1      and billing_master.doctor_id=3    
 Execution Time:0.0014629364013672

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-12-06' and '2021-12-06' and  billing_master.office_id= 1      and billing_master.doctor_id=3    
 Execution Time:0.0014629364013672

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-06' and '2021-12-06' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=3 
 Execution Time:0.0022900104522705

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-12-07' and '2021-12-07' and  billing_master.office_id= 1      and billing_master.doctor_id=3    
 Execution Time:0.0023961067199707

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-12-07' and '2021-12-07' and  billing_master.office_id= 1      and billing_master.doctor_id=3    
 Execution Time:0.0023961067199707

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-07' and '2021-12-07' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=3 
 Execution Time:0.0063450336456299

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-12-07' and '2021-12-07' and  billing_master.office_id= 1      and billing_master.doctor_id=3    
 Execution Time:0.0023961067199707

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-07' and '2021-12-07' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=3 
 Execution Time:0.0063450336456299

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00062894821166992

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-12-07' and '2021-12-07' and  billing_master.office_id= 1      and billing_master.doctor_id=3    
 Execution Time:0.0023961067199707

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-07' and '2021-12-07' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=3 
 Execution Time:0.0063450336456299

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00062894821166992

select * from investigation where  investigation_id=16  and office_id= 1 and status=1 
 Execution Time:0.00029587745666504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062980651855469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062980651855469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062980651855469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062980651855469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062980651855469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061361789703369

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061361789703369

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061361789703369

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061361789703369

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020289421081543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020289421081543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020289421081543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020289421081543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038313865661621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020289421081543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038313865661621

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042500495910645

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060269832611084

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060269832611084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060269832611084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060269832611084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0029799938201904

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-04' and  '2021-12-04' and  billing_master.office_id= 1        
 Execution Time:0.0016310214996338

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-04' and  '2021-12-04' and  billing_master.office_id= 1        
 Execution Time:0.0016310214996338

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-04' and '2021-12-04' and  patient_registration.office_id= 1      
 Execution Time:0.0044000148773193

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-08' and  '2021-12-08' and  billing_master.office_id= 1        
 Execution Time:0.0034840106964111

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-08' and  '2021-12-08' and  billing_master.office_id= 1        
 Execution Time:0.0034840106964111

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-08' and '2021-12-08' and  patient_registration.office_id= 1      
 Execution Time:0.0048940181732178

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0016360282897949

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0016360282897949

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037002563476562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065302848815918

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065302848815918

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047588348388672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071215629577637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071215629577637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071215629577637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071215629577637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071215629577637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071215629577637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093698501586914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071215629577637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093698501586914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064260959625244

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041103363037109

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041103363037109

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0002140998840332

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004730224609375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004730224609375

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058579444885254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058579444885254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048708915710449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058579444885254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048708915710449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058579444885254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048708915710449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058579444885254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048708915710449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012211799621582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058579444885254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048708915710449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012211799621582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0084929466247559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067410469055176

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067410469055176

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0055780410766602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067410469055176

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0055780410766602

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0025589466094971

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067410469055176

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0055780410766602

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0025589466094971

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037429332733154

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067410469055176

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0055780410766602

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0025589466094971

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037429332733154

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.003803014755249

select count(*) as cnt from patient_registration where  patient_registration_id= '3272' and  office_id= '1' 
 Execution Time:0.00034689903259277

select count(*) as cnt from patient_registration where  patient_registration_id= '3272' and  office_id= '1' 
 Execution Time:0.00034689903259277

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3272' and  doctors_registration.office_id= '1' 
 Execution Time:0.0058798789978027

select count(*) as cnt from patient_registration where  patient_registration_id= '3272' and  office_id= '1' 
 Execution Time:0.00034689903259277

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3272' and  doctors_registration.office_id= '1' 
 Execution Time:0.0058798789978027

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3272' and  office_id= '1' 
 Execution Time:0.00034689903259277

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064420700073242

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064420700073242

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033402442932129

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0018370151519775

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-07' and  '2021-12-07' and  billing_master.office_id= 1        
 Execution Time:0.0019659996032715

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-07' and  '2021-12-07' and  billing_master.office_id= 1        
 Execution Time:0.0019659996032715

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-07' and '2021-12-07' and  patient_registration.office_id= 1      
 Execution Time:0.0068960189819336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061321258544922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061321258544922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071477890014648

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061321258544922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071477890014648

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061321258544922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071477890014648

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061321258544922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071477890014648

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029802322387695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029802322387695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029802322387695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076484680175781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029802322387695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076484680175781

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041110515594482

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051689147949219

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051689147949219

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026798248291016

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042605400085449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042605400085449

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018460750579834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018460750579834

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064129829406738

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00068998336791992

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00068998336791992

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00028085708618164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0031330585479736

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0031330585479736

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039196014404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014770030975342

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014770030975342

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014770030975342

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014770030975342

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001230001449585

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014770030975342

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001230001449585

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042819976806641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014770030975342

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001230001449585

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042819976806641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014770030975342

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001230001449585

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042819976806641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057506561279297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014770030975342

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001230001449585

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042819976806641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057506561279297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011115074157715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032687187194824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032687187194824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057930946350098

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037789344787598

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037789344787598

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003201961517334

select count(*) as cnt from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.00048589706420898

select count(*) as cnt from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.00048589706420898

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043320655822754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043320655822754

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002269983291626

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043320655822754

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002269983291626

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043320655822754

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002269983291626

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037884712219238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043320655822754

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002269983291626

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037884712219238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043320655822754

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002269983291626

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037884712219238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043320655822754

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002269983291626

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037884712219238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056099891662598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043320655822754

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002269983291626

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037884712219238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056099891662598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063691139221191

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.001168966293335

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.001168966293335

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00032401084899902

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00032782554626465

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00032782554626465

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00025391578674316

select count(*) as cnt from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.00035190582275391

select count(*) as cnt from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.00035190582275391

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046300888061523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047309398651123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075984001159668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075984001159668

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075984001159668

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036907196044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075984001159668

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036907196044922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075984001159668

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036907196044922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075984001159668

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036907196044922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073480606079102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075984001159668

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036907196044922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073480606079102

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060310363769531

select count(*) as cnt from patient_registration where  patient_registration_id= '674' and  office_id= '1' 
 Execution Time:0.00044703483581543

select count(*) as cnt from patient_registration where  patient_registration_id= '674' and  office_id= '1' 
 Execution Time:0.00044703483581543

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='674' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029258728027344

select count(*) as cnt from patient_registration where  patient_registration_id= '674' and  office_id= '1' 
 Execution Time:0.00044703483581543

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='674' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029258728027344

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='674' and  office_id= '1' 
 Execution Time:0.00041604042053223

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037789344787598

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037789344787598

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026488304138184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073249340057373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073249340057373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042421817779541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073249340057373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042421817779541

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035710334777832

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073249340057373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042421817779541

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035710334777832

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0037760734558105

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-07' and  '2021-12-07' and  billing_master.office_id= 1        
 Execution Time:0.0021629333496094

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-07' and  '2021-12-07' and  billing_master.office_id= 1        
 Execution Time:0.0021629333496094

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-07' and '2021-12-07' and  patient_registration.office_id= 1      
 Execution Time:0.0052380561828613

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00046396255493164

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00046396255493164

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087904930114746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087904930114746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065910816192627

select count(*) as cnt from patient_registration where  patient_registration_id= '2344' and  office_id= '1' 
 Execution Time:0.00049996376037598

select count(*) as cnt from patient_registration where  patient_registration_id= '2344' and  office_id= '1' 
 Execution Time:0.00049996376037598

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2344' and  doctors_registration.office_id= '1' 
 Execution Time:0.0054299831390381

select count(*) as cnt from patient_registration where  patient_registration_id= '2344' and  office_id= '1' 
 Execution Time:0.00049996376037598

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2344' and  doctors_registration.office_id= '1' 
 Execution Time:0.0054299831390381

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2344' and  office_id= '1' 
 Execution Time:0.00042510032653809

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0072147846221924

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0072147846221924

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00058794021606445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036883354187012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036883354187012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036883354187012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036883354187012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049495697021484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036883354187012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049495697021484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006511926651001

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0006251335144043

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0006251335144043

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030708312988281

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050806999206543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050806999206543

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014081001281738

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014081001281738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014081001281738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014081001281738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054097175598145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014081001281738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054097175598145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030279159545898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014081001281738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054097175598145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030279159545898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014081001281738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054097175598145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030279159545898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014081001281738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054097175598145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030279159545898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040197372436523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004241943359375

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00053715705871582

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00053715705871582

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00022196769714355

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00058412551879883

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00058412551879883

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00029492378234863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00073003768920898

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00073003768920898

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011019706726074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011019706726074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011019706726074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025870800018311

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011019706726074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025870800018311

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010428428649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011019706726074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025870800018311

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010428428649902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072383880615234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011019706726074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025870800018311

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010428428649902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072383880615234

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082707405090332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011019706726074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025870800018311

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010428428649902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072383880615234

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082707405090332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081939697265625

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00072097778320312

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00072097778320312

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00020408630371094

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066900253295898

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066900253295898

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074315071105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074315071105957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041170120239258

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00062990188598633

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00062990188598633

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029611587524414

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026416778564453

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026416778564453

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00018620491027832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051999092102051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051999092102051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051999092102051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051999092102051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054693222045898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051999092102051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054693222045898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036978721618652

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047898292541504

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047898292541504

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00023388862609863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057315826416016

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057315826416016

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00021004676818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024890899658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024890899658203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024890899658203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024890899658203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069999694824219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024890899658203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069999694824219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042679309844971

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00033116340637207

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00033116340637207

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00024104118347168

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050997734069824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050997734069824

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00020313262939453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014805793762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014805793762207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014805793762207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014805793762207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014805793762207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00023794174194336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041329860687256

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00048303604125977

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00048303604125977

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00027012825012207

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0014140605926514

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0014140605926514

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020191669464111

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020191669464111

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064206123352051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020191669464111

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064206123352051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038659572601318

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020191669464111

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064206123352051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038659572601318

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023188591003418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020191669464111

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064206123352051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038659572601318

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023188591003418

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014889240264893

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020191669464111

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064206123352051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038659572601318

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023188591003418

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014889240264893

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067260265350342

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003659725189209

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003659725189209

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028085708618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028085708618164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028085708618164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028085708618164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028085708618164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00029492378234863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004256010055542

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0004730224609375

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0004730224609375

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029206275939941

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061416625976562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061416625976562

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098204612731934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098204612731934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098204612731934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098204612731934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055098533630371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098204612731934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055098533630371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098204612731934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055098533630371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098204612731934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055098533630371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053095817565918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098204612731934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055098533630371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053095817565918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058989524841309

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040390491485596

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040390491485596

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040390491485596

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012497901916504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040390491485596

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012497901916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00079917907714844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040390491485596

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012497901916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00079917907714844

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.003201961517334

select count(*) as cnt from patient_registration where  patient_registration_id= '3279' and  office_id= '1' 
 Execution Time:0.00043797492980957

select count(*) as cnt from patient_registration where  patient_registration_id= '3279' and  office_id= '1' 
 Execution Time:0.00043797492980957

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3279' and  doctors_registration.office_id= '1' 
 Execution Time:0.0052690505981445

select count(*) as cnt from patient_registration where  patient_registration_id= '3279' and  office_id= '1' 
 Execution Time:0.00043797492980957

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3279' and  doctors_registration.office_id= '1' 
 Execution Time:0.0052690505981445

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3279' and  office_id= '1' 
 Execution Time:0.00041699409484863

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011951923370361

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011951923370361

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00029206275939941

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.0024449825286865

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063700675964355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063700675964355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063700675964355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063700675964355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063700675964355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00032877922058105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065491199493408

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065491199493408

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018579959869385

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065491199493408

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018579959869385

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065491199493408

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018579959869385

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065491199493408

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018579959869385

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0016880035400391

select count(*) as cnt from patient_registration where  patient_registration_id= '3281' and  office_id= '1' 
 Execution Time:0.00029206275939941

select count(*) as cnt from patient_registration where  patient_registration_id= '3281' and  office_id= '1' 
 Execution Time:0.00029206275939941

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3281' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029001235961914

select count(*) as cnt from patient_registration where  patient_registration_id= '3281' and  office_id= '1' 
 Execution Time:0.00029206275939941

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3281' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029001235961914

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3281' and  office_id= '1' 
 Execution Time:0.0017368793487549

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004730224609375

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004730224609375

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035691261291504

select * from investigation where  investigation_id=22  and office_id= 1 and status=1 
 Execution Time:0.00079512596130371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067510604858398

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067510604858398

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067510604858398

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067510604858398

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067510604858398

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026049613952637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026049613952637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041160583496094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026049613952637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041160583496094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001345157623291

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026049613952637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041160583496094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001345157623291

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001957893371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026049613952637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041160583496094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001345157623291

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001957893371582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011711120605469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026049613952637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041160583496094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001345157623291

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001957893371582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011711120605469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012019872665405

select count(*) as cnt from patient_registration where  patient_registration_id= '1517' and  office_id= '1' 
 Execution Time:0.00039386749267578

select count(*) as cnt from patient_registration where  patient_registration_id= '1517' and  office_id= '1' 
 Execution Time:0.00039386749267578

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1517' and  doctors_registration.office_id= '1' 
 Execution Time:0.004702091217041

select count(*) as cnt from patient_registration where  patient_registration_id= '1517' and  office_id= '1' 
 Execution Time:0.00039386749267578

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1517' and  doctors_registration.office_id= '1' 
 Execution Time:0.004702091217041

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='1517' and  office_id= '1' 
 Execution Time:0.00029611587524414

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00066304206848145

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00066304206848145

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00023698806762695

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00071001052856445

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00071001052856445

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0014290809631348

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00087594985961914

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00087594985961914

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025198459625244

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025198459625244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058484077453613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025198459625244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058484077453613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025198459625244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058484077453613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025198459625244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058484077453613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025198459625244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058484077453613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025198459625244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058484077453613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069999694824219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025198459625244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058484077453613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069999694824219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072321891784668

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00078296661376953

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00078296661376953

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052404403686523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054299831390381

select count(*) as cnt from patient_registration where  patient_registration_id= '2753' and  office_id= '1' 
 Execution Time:0.0029089450836182

select count(*) as cnt from patient_registration where  patient_registration_id= '2753' and  office_id= '1' 
 Execution Time:0.0029089450836182

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2753' and  doctors_registration.office_id= '1' 
 Execution Time:0.0058159828186035

select count(*) as cnt from patient_registration where  patient_registration_id= '2753' and  office_id= '1' 
 Execution Time:0.0029089450836182

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2753' and  doctors_registration.office_id= '1' 
 Execution Time:0.0058159828186035

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2753' and  office_id= '1' 
 Execution Time:0.0027730464935303

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040912628173828

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040912628173828

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00033783912658691

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0008089542388916

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0008089542388916

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00021505355834961

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043797492980957

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043797492980957

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00018811225891113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049281120300293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049281120300293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049281120300293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049281120300293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066184997558594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049281120300293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066184997558594

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043818950653076

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026082992553711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026082992553711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026082992553711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011849403381348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026082992553711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011849403381348

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065088272094727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026082992553711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011849403381348

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065088272094727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040159225463867

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066258907318115

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066258907318115

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043890476226807

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066258907318115

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043890476226807

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013909339904785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066258907318115

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043890476226807

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013909339904785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066258907318115

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043890476226807

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013909339904785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00095987319946289

select count(*) as cnt from patient_registration where  patient_registration_id= '2753' and  office_id= '1' 
 Execution Time:0.00068783760070801

select count(*) as cnt from patient_registration where  patient_registration_id= '2753' and  office_id= '1' 
 Execution Time:0.00068783760070801

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2753' and  doctors_registration.office_id= '1' 
 Execution Time:0.0051250457763672

select count(*) as cnt from patient_registration where  patient_registration_id= '2753' and  office_id= '1' 
 Execution Time:0.00068783760070801

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2753' and  doctors_registration.office_id= '1' 
 Execution Time:0.0051250457763672

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2753' and  office_id= '1' 
 Execution Time:0.00032687187194824

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0026419162750244

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0026419162750244

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037813186645508

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.00071310997009277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038230419158936

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038230419158936

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038230419158936

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038230419158936

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038230419158936

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094819068908691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094819068908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094819068908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004420280456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094819068908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004420280456543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094819068908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004420280456543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094819068908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004420280456543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068092346191406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094819068908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004420280456543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068092346191406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011062860488892

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019097328186035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019097328186035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019097328186035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021219253540039

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019097328186035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021219253540039

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033807754516602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019097328186035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021219253540039

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033807754516602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042128562927246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049140453338623

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049140453338623

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040791034698486

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049140453338623

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040791034698486

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048809051513672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049140453338623

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040791034698486

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048809051513672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.004586935043335

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049140453338623

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040791034698486

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048809051513672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.004586935043335

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031418800354004

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049140453338623

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040791034698486

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048809051513672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.004586935043335

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031418800354004

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049140453338623

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040791034698486

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048809051513672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.004586935043335

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031418800354004

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028879642486572

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049140453338623

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040791034698486

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048809051513672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.004586935043335

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031418800354004

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028879642486572

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.022530794143677

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047860145568848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047860145568848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047860145568848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047860145568848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001046895980835

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047860145568848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001046895980835

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047860145568848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001046895980835

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047860145568848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001046895980835

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008089542388916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047860145568848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001046895980835

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008089542388916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058820247650146

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041508674621582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041508674621582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041508674621582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041508674621582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070905685424805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041508674621582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070905685424805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044629573822021

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017731189727783

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017731189727783

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039908885955811

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017731189727783

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039908885955811

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056195259094238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017731189727783

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039908885955811

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056195259094238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0078279972076416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017731189727783

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039908885955811

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056195259094238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0078279972076416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00084280967712402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017731189727783

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039908885955811

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056195259094238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0078279972076416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00084280967712402

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043892860412598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017731189727783

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039908885955811

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056195259094238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0078279972076416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00084280967712402

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043892860412598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0099971294403076

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017609596252441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017609596252441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019631385803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017609596252441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019631385803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016369819641113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017609596252441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019631385803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016369819641113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022339820861816

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017609596252441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019631385803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016369819641113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022339820861816

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024628639221191

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017609596252441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019631385803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016369819641113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022339820861816

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024628639221191

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019979476928711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017609596252441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019631385803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016369819641113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022339820861816

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024628639221191

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019979476928711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017030239105225

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017609596252441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019631385803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016369819641113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022339820861816

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024628639221191

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019979476928711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017030239105225

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041878223419189

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00051498413085938

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00051498413085938

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029397010803223

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0029590129852295

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0029590129852295

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0017869472503662

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010077953338623

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010077953338623

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033688545227051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013601779937744

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013601779937744

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075697898864746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013601779937744

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075697898864746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013601779937744

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075697898864746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013601779937744

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075697898864746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028660297393799

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013601779937744

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075697898864746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028660297393799

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045270919799805

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00043201446533203

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00043201446533203

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029087066650391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036287307739258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036287307739258

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019690990447998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019690990447998

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033748149871826

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019690990447998

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033748149871826

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019690990447998

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033748149871826

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063014030456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019690990447998

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033748149871826

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063014030456543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019690990447998

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033748149871826

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063014030456543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019690990447998

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033748149871826

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063014030456543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051712989807129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019690990447998

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033748149871826

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063014030456543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051712989807129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006554126739502

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00042891502380371

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00042891502380371

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00027012825012207

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039982795715332

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039982795715332

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035400390625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035400390625

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002392053604126

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035400390625

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002392053604126

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035400390625

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002392053604126

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035400390625

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002392053604126

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036787986755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035400390625

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002392053604126

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036787986755371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069539546966553

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063991546630859

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063991546630859

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034999847412109

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052690505981445

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052690505981445

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010058879852295

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010058879852295

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028269290924072

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010058879852295

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028269290924072

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0068609714508057

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010058879852295

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028269290924072

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0068609714508057

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012550354003906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010058879852295

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028269290924072

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0068609714508057

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012550354003906

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044000148773193

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00027918815612793

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00027918815612793

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00021004676818848

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040602684020996

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040602684020996

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032687187194824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.038562059402466

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.038562059402466

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023059844970703

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.038562059402466

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023059844970703

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012428760528564

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.038562059402466

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023059844970703

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012428760528564

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001910924911499

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.038562059402466

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023059844970703

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012428760528564

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001910924911499

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0088889598846436

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.038562059402466

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023059844970703

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012428760528564

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001910924911499

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0088889598846436

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0071499347686768

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.038562059402466

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023059844970703

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012428760528564

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001910924911499

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0088889598846436

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0071499347686768

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026109218597412

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.038562059402466

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023059844970703

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012428760528564

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001910924911499

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0088889598846436

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0071499347686768

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026109218597412

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0089881420135498

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047183036804199

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047183036804199

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0012960433959961

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0008540153503418

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0008540153503418

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051093101501465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051093101501465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063381195068359

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00075197219848633

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00075197219848633

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00032210350036621

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003669261932373

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003669261932373

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031113624572754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018310546875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018310546875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018310546875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018310546875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018310546875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00030398368835449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046849250793457

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00086092948913574

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00086092948913574

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00040507316589355

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00069594383239746

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00069594383239746

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.002763032913208

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053191184997559

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053191184997559

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036883354187012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010008811950684

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010008811950684

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010008811950684

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029580593109131

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010008811950684

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029580593109131

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010008811950684

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029580593109131

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004119873046875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010008811950684

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029580593109131

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004119873046875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010008811950684

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029580593109131

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004119873046875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039911270141602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010008811950684

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029580593109131

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004119873046875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039911270141602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043971538543701

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00052905082702637

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00052905082702637

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00024890899658203

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.002842903137207

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.002842903137207

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039196014404297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053191184997559

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053191184997559

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032739639282227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050201416015625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050201416015625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050201416015625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050201416015625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021696090698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050201416015625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021696090698242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050201416015625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021696090698242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050201416015625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021696090698242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034689903259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050201416015625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021696090698242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034689903259277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053548812866211

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021710395812988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021710395812988

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015580654144287

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021710395812988

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015580654144287

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021710395812988

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015580654144287

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058102607727051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021710395812988

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015580654144287

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058102607727051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021710395812988

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015580654144287

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058102607727051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.000885009765625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021710395812988

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015580654144287

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058102607727051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.000885009765625

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0099048614501953

select count(*) as cnt from patient_registration where  patient_registration_id= '2446' and  office_id= '1' 
 Execution Time:0.001060962677002

select count(*) as cnt from patient_registration where  patient_registration_id= '2446' and  office_id= '1' 
 Execution Time:0.001060962677002

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2446' and  doctors_registration.office_id= '1' 
 Execution Time:0.0054700374603271

select count(*) as cnt from patient_registration where  patient_registration_id= '2446' and  office_id= '1' 
 Execution Time:0.001060962677002

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2446' and  doctors_registration.office_id= '1' 
 Execution Time:0.0054700374603271

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2446' and  office_id= '1' 
 Execution Time:0.00044512748718262

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0049850940704346

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0049850940704346

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0014369487762451

select count(*) as cnt from patient_registration where  patient_registration_id= '3102' and  office_id= '1' 
 Execution Time:0.00043916702270508

select count(*) as cnt from patient_registration where  patient_registration_id= '3102' and  office_id= '1' 
 Execution Time:0.00043916702270508

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3102' and  doctors_registration.office_id= '1' 
 Execution Time:0.0047609806060791

select count(*) as cnt from patient_registration where  patient_registration_id= '3102' and  office_id= '1' 
 Execution Time:0.00043916702270508

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3102' and  doctors_registration.office_id= '1' 
 Execution Time:0.0047609806060791

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3102' and  office_id= '1' 
 Execution Time:0.002655029296875

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00063490867614746

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00063490867614746

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00041508674621582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084900856018066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039386749267578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084900856018066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065069198608398

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026392936706543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026392936706543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026392936706543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046992301940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026392936706543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046992301940918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065209865570068

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060606002807617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060606002807617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060269832611084

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00041294097900391

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00041294097900391

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0003209114074707

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046610832214355

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046610832214355

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056791305541992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056791305541992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053000450134277

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00038599967956543

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00038599967956543

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003659725189209

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037193298339844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037193298339844

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029087066650391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033211708068848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033211708068848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033211708068848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033211708068848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016050338745117

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033211708068848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016050338745117

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062131881713867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084614753723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084614753723145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013949871063232

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084614753723145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013949871063232

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084614753723145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013949871063232

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051403045654297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084614753723145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013949871063232

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051403045654297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084614753723145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013949871063232

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051403045654297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084614753723145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013949871063232

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051403045654297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068116188049316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084614753723145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013949871063232

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051403045654297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068116188049316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059981346130371

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00060892105102539

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00060892105102539

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032711029052734

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004279613494873

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004279613494873

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010190010070801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010190010070801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024020671844482

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010190010070801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024020671844482

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019938945770264

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010190010070801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024020671844482

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019938945770264

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010190010070801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024020671844482

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019938945770264

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010340213775635

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010190010070801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024020671844482

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019938945770264

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010340213775635

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051307678222656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010190010070801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024020671844482

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019938945770264

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010340213775635

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051307678222656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069580078125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068919658660889

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068919658660889

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090408325195312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068919658660889

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090408325195312

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016829967498779

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068919658660889

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090408325195312

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016829967498779

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0014400482177734

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068919658660889

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090408325195312

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016829967498779

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0014400482177734

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0039050579071045

select count(*) as cnt from patient_registration where  patient_registration_id= '3295' and  office_id= '1' 
 Execution Time:0.00043296813964844

select count(*) as cnt from patient_registration where  patient_registration_id= '3295' and  office_id= '1' 
 Execution Time:0.00043296813964844

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3295' and  doctors_registration.office_id= '1' 
 Execution Time:0.0049388408660889

select count(*) as cnt from patient_registration where  patient_registration_id= '3295' and  office_id= '1' 
 Execution Time:0.00043296813964844

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3295' and  doctors_registration.office_id= '1' 
 Execution Time:0.0049388408660889

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3295' and  office_id= '1' 
 Execution Time:0.00030398368835449

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.053397178649902

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.053397178649902

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0055079460144043

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00073003768920898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073108673095703

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073108673095703

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073108673095703

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073108673095703

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073108673095703

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007331371307373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007331371307373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007331371307373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007331371307373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076484680175781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007331371307373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076484680175781

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044119358062744

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034999847412109

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034999847412109

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0085020065307617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051403045654297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051403045654297

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092506408691406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092506408691406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027468204498291

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092506408691406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027468204498291

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018820762634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092506408691406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027468204498291

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018820762634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022969245910645

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092506408691406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027468204498291

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018820762634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022969245910645

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092506408691406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027468204498291

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018820762634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022969245910645

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038368701934814

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092506408691406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027468204498291

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018820762634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022969245910645

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038368701934814

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015120506286621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092506408691406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027468204498291

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018820762634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022969245910645

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038368701934814

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015120506286621

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0085132122039795

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014898777008057

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014898777008057

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011899471282959

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014898777008057

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011899471282959

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016460418701172

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014898777008057

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011899471282959

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016460418701172

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013289451599121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014898777008057

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011899471282959

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016460418701172

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013289451599121

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017318725585938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014898777008057

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011899471282959

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016460418701172

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013289451599121

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017318725585938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002810001373291

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014898777008057

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011899471282959

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016460418701172

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013289451599121

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017318725585938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002810001373291

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010890960693359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014898777008057

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011899471282959

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016460418701172

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013289451599121

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017318725585938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002810001373291

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010890960693359

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.01033091545105

select count(*) as cnt from patient_registration where  patient_registration_id= '2488' and  office_id= '1' 
 Execution Time:0.0005040168762207

select count(*) as cnt from patient_registration where  patient_registration_id= '2488' and  office_id= '1' 
 Execution Time:0.0005040168762207

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2488' and  doctors_registration.office_id= '1' 
 Execution Time:0.0080058574676514

select count(*) as cnt from patient_registration where  patient_registration_id= '2488' and  office_id= '1' 
 Execution Time:0.0005040168762207

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2488' and  doctors_registration.office_id= '1' 
 Execution Time:0.0080058574676514

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2488' and  office_id= '1' 
 Execution Time:0.00040388107299805

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042986869812012

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042986869812012

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032901763916016

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00065088272094727

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00065088272094727

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00036811828613281

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00082707405090332

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00082707405090332

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045895576477051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045895576477051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033020973205566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045895576477051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033020973205566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001370906829834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045895576477051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033020973205566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001370906829834

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067470073699951

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00053286552429199

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00053286552429199

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0002748966217041

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044894218444824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044894218444824

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028610229492188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039005279541016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025677680969238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039005279541016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025677680969238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039005279541016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025677680969238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005948543548584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039005279541016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025677680969238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005948543548584

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056660175323486

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020029544830322

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020029544830322

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011839866638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020029544830322

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011839866638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010170936584473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020029544830322

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011839866638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010170936584473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018501281738281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020029544830322

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011839866638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010170936584473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018501281738281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018870830535889

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020029544830322

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011839866638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010170936584473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018501281738281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018870830535889

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020029544830322

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011839866638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010170936584473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018501281738281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018870830535889

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013971328735352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020029544830322

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011839866638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010170936584473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018501281738281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018870830535889

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013971328735352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042250156402588

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045919418334961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045919418334961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062508583068848

